/* Some misc JavaScript compatibility tests, just to make sure the environments we run in are consistent */

QUnit.module( 'mediawiki.jscompat', QUnit.newMwEnvironment() );

QUnit.test( 'Variable with Unicode letter in name', 3, function ( assert ) {
	var orig = "some token";
	var ŝablono = orig;

	assert.deepEqual( ŝablono, orig, 'ŝablono' );
	assert.deepEqual( \u015dablono, orig, '\\u015dablono' );
	assert.deepEqual( \u015Dablono, orig, '\\u015Dablono' );
});

/*
// Not that we need this. ;)
// This fails on IE 6-8
// Works on IE 9, Firefox 6, Chrome 14
QUnit.test( 'Keyword workaround: "if" as variable name using Unicode escapes', function ( assert ) {
	var orig = "another token";
	\u0069\u0066 = orig;
	assert.deepEqual( \u0069\u0066, orig, '\\u0069\\u0066' );
});
*/

/*
// Not that we need this. ;)
// This fails on IE 6-9
// Works on Firefox 6, Chrome 14
QUnit.test( 'Keyword workaround: "if" as member variable name using Unicode escapes', function ( assert ) {
	var orig = "another token";
	var foo = {};
	foo.\u0069\u0066 = orig;
	assert.deepEqual( foo.\u0069\u0066, orig, 'foo.\\u0069\\u0066' );
});
*/

QUnit.test( 'Stripping of single initial newline from textarea\'s literal contents (bug 12130)', function ( assert ) {
	var maxn = 4;
	QUnit.expect( maxn * 2 );

	function repeat( str, n ) {
		if ( n <= 0 ) {
			return '';
		} else {
			var out = new Array(n);
			for ( var i = 0; i < n; i++ ) {
				out[i] = str;
			}
			return out.join('');
		}
	}

	for ( var n = 0; n < maxn; n++ ) {
		var expected = repeat('\n', n) + 'some text';

		var $textarea = $('<textarea>\n' + expected + '</textarea>');
		assert.equal( $textarea.val(), expected, 'Expecting ' + n + ' newlines (HTML contained ' + (n + 1) + ')' );

		var $textarea2 = $('<textarea>').val(expected);
		assert.equal( $textarea2.val(), expected, 'Expecting ' + n + ' newlines (from DOM set with ' + n + ')' );
	}
});
