<?php

/**
 * Tests for MediaWiki api.php?action=edit.
 *
 * @author Daniel Kinzler
 *
 * @group API
 * @group Database
 */
class ApiEditPageTest extends ApiTestCase {

	public function setup() {
		global $wgExtraNamespaces, $wgNamespaceContentModels, $wgContentHandlers, $wgContLang;

		parent::setup();

		$wgExtraNamespaces[12312] = 'Dummy';
		$wgExtraNamespaces[12313] = 'Dummy_talk';

		$wgNamespaceContentModels[12312] = "testing";
		$wgContentHandlers["testing"] = 'DummyContentHandlerForTesting';

		MWNamespace::getCanonicalNamespaces( true ); # reset namespace cache
		$wgContLang->resetNamespaces(); # reset namespace cache

		$this->doLogin();
	}

	public function teardown() {
		global $wgExtraNamespaces, $wgNamespaceContentModels, $wgContentHandlers, $wgContLang;

		unset( $wgExtraNamespaces[12312] );
		unset( $wgExtraNamespaces[12313] );

		unset( $wgNamespaceContentModels[12312] );
		unset( $wgContentHandlers["testing"] );

		MWNamespace::getCanonicalNamespaces( true ); # reset namespace cache
		$wgContLang->resetNamespaces(); # reset namespace cache

		parent::teardown();
	}

	function testEdit( ) {
		$name = 'Help:ApiEditPageTest_testEdit'; // assume Help namespace to default to wikitext

		// -- test new page --------------------------------------------
		$apiResult = $this->doApiRequestWithToken( array(
				'action' => 'edit',
				'title' => $name,
				'text' => 'some text', ) );
		$apiResult = $apiResult[0];

		// Validate API result data
		$this->assertArrayHasKey( 'edit', $apiResult );
		$this->assertArrayHasKey( 'result', $apiResult['edit'] );
		$this->assertEquals( 'Success', $apiResult['edit']['result'] );

		$this->assertArrayHasKey( 'new', $apiResult['edit'] );
		$this->assertArrayNotHasKey( 'nochange', $apiResult['edit'] );

		$this->assertArrayHasKey( 'pageid', $apiResult['edit'] );

		// -- test existing page, no change ----------------------------
		$data = $this->doApiRequestWithToken( array(
				'action' => 'edit',
				'title' => $name,
				'text' => 'some text', ) );

		$this->assertEquals( 'Success', $data[0]['edit']['result'] );

		$this->assertArrayNotHasKey( 'new', $data[0]['edit'] );
		$this->assertArrayHasKey( 'nochange', $data[0]['edit'] );

		// -- test existing page, with change --------------------------
		$data = $this->doApiRequestWithToken( array(
				'action' => 'edit',
				'title' => $name,
				'text' => 'different text' ) );

		$this->assertEquals( 'Success', $data[0]['edit']['result'] );

		$this->assertArrayNotHasKey( 'new', $data[0]['edit'] );
		$this->assertArrayNotHasKey( 'nochange', $data[0]['edit'] );

		$this->assertArrayHasKey( 'oldrevid', $data[0]['edit'] );
		$this->assertArrayHasKey( 'newrevid', $data[0]['edit'] );
		$this->assertNotEquals(
			$data[0]['edit']['newrevid'],
			$data[0]['edit']['oldrevid'],
			"revision id should change after edit"
		);
	}

	function testNonTextEdit( ) {
		$name = 'Dummy:ApiEditPageTest_testNonTextEdit';
		$data = serialize( 'some bla bla text' );

		// -- test new page --------------------------------------------
		$apiResult = $this->doApiRequestWithToken( array(
			'action' => 'edit',
			'title' => $name,
			'text' => $data, ) );
		$apiResult = $apiResult[0];

		// Validate API result data
		$this->assertArrayHasKey( 'edit', $apiResult );
		$this->assertArrayHasKey( 'result', $apiResult['edit'] );
		$this->assertEquals( 'Success', $apiResult['edit']['result'] );

		$this->assertArrayHasKey( 'new', $apiResult['edit'] );
		$this->assertArrayNotHasKey( 'nochange', $apiResult['edit'] );

		$this->assertArrayHasKey( 'pageid', $apiResult['edit'] );

		// validate resulting revision
		$page = WikiPage::factory( Title::newFromText( $name ) );
		$this->assertEquals( "testing", $page->getContentModel() );
		$this->assertEquals( $data, $page->getContent()->serialize() );
	}

	static function provideEditAppend() {
		return array(
			array( #0: append
				'foo', 'append', 'bar', "foobar"
			),
			array( #1: prepend
				'foo', 'prepend', 'bar', "barfoo"
			),
			array( #2: append to empty page
				'', 'append', 'foo', "foo"
			),
			array( #3: prepend to empty page
				'', 'prepend', 'foo', "foo"
			),
			array( #4: append to non-existing page
				null, 'append', 'foo', "foo"
			),
			array( #5: prepend to non-existing page
				null, 'prepend', 'foo', "foo"
			),
		);
	}

	/**
	 * @dataProvider provideEditAppend
	 */
	function testEditAppend( $text, $op, $append, $expected ) {
		static $count = 0;
		$count++;

		// assume NS_HELP defaults to wikitext
		$name = "Help:ApiEditPageTest_testEditAppend_$count";

		// -- create page (or not) -----------------------------------------
		if ( $text !== null ) {
			if ( $text === '' ) {
				// can't create an empty page, so create it with some content
				list( $re,, ) = $this->doApiRequestWithToken( array(
					'action' => 'edit',
					'title' => $name,
					'text' => '(dummy)', ) );
			}

			list( $re,, ) = $this->doApiRequestWithToken( array(
				'action' => 'edit',
				'title' => $name,
				'text' => $text, ) );

			$this->assertEquals( 'Success', $re['edit']['result'] ); // sanity
		}

		// -- try append/prepend --------------------------------------------
		list( $re,, ) = $this->doApiRequestWithToken( array(
			'action' => 'edit',
			'title' => $name,
			$op . 'text' => $append, ) );

		$this->assertEquals( 'Success', $re['edit']['result'] );

		// -- validate -----------------------------------------------------
		$page = new WikiPage( Title::newFromText( $name ) );
		$content = $page->getContent();
		$this->assertNotNull( $content, 'Page should have been created' );

		$text = $content->getNativeData();

		$this->assertEquals( $expected, $text );
	}

	function testEditSection() {
		$this->markTestIncomplete( "not yet implemented" );
	}

	function testUndo() {
		$this->markTestIncomplete( "not yet implemented" );
	}
}
