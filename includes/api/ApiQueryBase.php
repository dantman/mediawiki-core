<?php
/**
 *
 *
 * Created on Sep 7, 2006
 *
 * Copyright © 2006 Yuri Astrakhan "<Firstname><Lastname>@gmail.com"
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

/**
 * This is a base class for all Query modules.
 * It provides some common functionality such as constructing various SQL
 * queries.
 *
 * @ingroup API
 */
abstract class ApiQueryBase extends ApiBase {

	private $mQueryModule, $mDb, $tables, $where, $fields, $options, $join_conds;

	/**
	 * @param $query ApiBase
	 * @param $moduleName string
	 * @param $paramPrefix string
	 */
	public function __construct( ApiBase $query, $moduleName, $paramPrefix = '' ) {
		parent::__construct( $query->getMain(), $moduleName, $paramPrefix );
		$this->mQueryModule = $query;
		$this->mDb = null;
		$this->resetQueryParams();
	}

	/**
	 * Get the cache mode for the data generated by this module. Override
	 * this in the module subclass. For possible return values and other
	 * details about cache modes, see ApiMain::setCacheMode()
	 *
	 * Public caching will only be allowed if *all* the modules that supply
	 * data for a given request return a cache mode of public.
	 *
	 * @param $params
	 * @return string
	 */
	public function getCacheMode( $params ) {
		return 'private';
	}

	/**
	 * Blank the internal arrays with query parameters
	 */
	protected function resetQueryParams() {
		$this->tables = array();
		$this->where = array();
		$this->fields = array();
		$this->options = array();
		$this->join_conds = array();
	}

	/**
	 * Add a set of tables to the internal array
	 * @param $tables mixed Table name or array of table names
	 * @param $alias mixed Table alias, or null for no alias. Cannot be
	 *  used with multiple tables
	 */
	protected function addTables( $tables, $alias = null ) {
		if ( is_array( $tables ) ) {
			if ( !is_null( $alias ) ) {
				ApiBase::dieDebug( __METHOD__, 'Multiple table aliases not supported' );
			}
			$this->tables = array_merge( $this->tables, $tables );
		} else {
			if ( !is_null( $alias ) ) {
				$this->tables[$alias] = $tables;
			} else {
				$this->tables[] = $tables;
			}
		}
	}

	/**
	 * Add a set of JOIN conditions to the internal array
	 *
	 * JOIN conditions are formatted as array( tablename => array(jointype,
	 * conditions) e.g. array('page' => array('LEFT JOIN',
	 * 'page_id=rev_page')) . conditions may be a string or an
	 * addWhere()-style array
	 * @param $join_conds array JOIN conditions
	 */
	protected function addJoinConds( $join_conds ) {
		if ( !is_array( $join_conds ) ) {
			ApiBase::dieDebug( __METHOD__, 'Join conditions have to be arrays' );
		}
		$this->join_conds = array_merge( $this->join_conds, $join_conds );
	}

	/**
	 * Add a set of fields to select to the internal array
	 * @param $value array|string Field name or array of field names
	 */
	protected function addFields( $value ) {
		if ( is_array( $value ) ) {
			$this->fields = array_merge( $this->fields, $value );
		} else {
			$this->fields[] = $value;
		}
	}

	/**
	 * Same as addFields(), but add the fields only if a condition is met
	 * @param $value array|string See addFields()
	 * @param $condition bool If false, do nothing
	 * @return bool $condition
	 */
	protected function addFieldsIf( $value, $condition ) {
		if ( $condition ) {
			$this->addFields( $value );
			return true;
		}
		return false;
	}

	/**
	 * Add a set of WHERE clauses to the internal array.
	 * Clauses can be formatted as 'foo=bar' or array('foo' => 'bar'),
	 * the latter only works if the value is a constant (i.e. not another field)
	 *
	 * If $value is an empty array, this function does nothing.
	 *
	 * For example, array('foo=bar', 'baz' => 3, 'bla' => 'foo') translates
	 * to "foo=bar AND baz='3' AND bla='foo'"
	 * @param $value mixed String or array
	 */
	protected function addWhere( $value ) {
		if ( is_array( $value ) ) {
			// Sanity check: don't insert empty arrays,
			// Database::makeList() chokes on them
			if ( count( $value ) ) {
				$this->where = array_merge( $this->where, $value );
			}
		} else {
			$this->where[] = $value;
		}
	}

	/**
	 * Same as addWhere(), but add the WHERE clauses only if a condition is met
	 * @param $value mixed See addWhere()
	 * @param $condition bool If false, do nothing
	 * @return bool $condition
	 */
	protected function addWhereIf( $value, $condition ) {
		if ( $condition ) {
			$this->addWhere( $value );
			return true;
		}
		return false;
	}

	/**
	 * Equivalent to addWhere(array($field => $value))
	 * @param $field string Field name
	 * @param $value string Value; ignored if null or empty array;
	 */
	protected function addWhereFld( $field, $value ) {
		// Use count() to its full documented capabilities to simultaneously
		// test for null, empty array or empty countable object
		if ( count( $value ) ) {
			$this->where[$field] = $value;
		}
	}

	/**
	 * Add a WHERE clause corresponding to a range, and an ORDER BY
	 * clause to sort in the right direction
	 * @param $field string Field name
	 * @param $dir string If 'newer', sort in ascending order, otherwise
	 *  sort in descending order
	 * @param $start string Value to start the list at. If $dir == 'newer'
	 *  this is the lower boundary, otherwise it's the upper boundary
	 * @param $end string Value to end the list at. If $dir == 'newer' this
	 *  is the upper boundary, otherwise it's the lower boundary
	 * @param $sort bool If false, don't add an ORDER BY clause
	 */
	protected function addWhereRange( $field, $dir, $start, $end, $sort = true ) {
		$isDirNewer = ( $dir === 'newer' );
		$after = ( $isDirNewer ? '>=' : '<=' );
		$before = ( $isDirNewer ? '<=' : '>=' );
		$db = $this->getDB();

		if ( !is_null( $start ) ) {
			$this->addWhere( $field . $after . $db->addQuotes( $start ) );
		}

		if ( !is_null( $end ) ) {
			$this->addWhere( $field . $before . $db->addQuotes( $end ) );
		}

		if ( $sort ) {
			$order = $field . ( $isDirNewer ? '' : ' DESC' );
			// Append ORDER BY
			$optionOrderBy = isset( $this->options['ORDER BY'] ) ? (array)$this->options['ORDER BY'] : array();
			$optionOrderBy[] = $order;
			$this->addOption( 'ORDER BY', $optionOrderBy );
		}
	}

	/**
	 * Add a WHERE clause corresponding to a range, similar to addWhereRange,
	 * but converts $start and $end to database timestamps.
	 * @see addWhereRange
	 * @param $field
	 * @param $dir
	 * @param $start
	 * @param $end
	 * @param $sort bool
	 */
	protected function addTimestampWhereRange( $field, $dir, $start, $end, $sort = true ) {
		$db = $this->getDb();
		$this->addWhereRange( $field, $dir,
			$db->timestampOrNull( $start ), $db->timestampOrNull( $end ), $sort );
	}

	/**
	 * Add an option such as LIMIT or USE INDEX. If an option was set
	 * before, the old value will be overwritten
	 * @param $name string Option name
	 * @param $value string Option value
	 */
	protected function addOption( $name, $value = null ) {
		if ( is_null( $value ) ) {
			$this->options[] = $name;
		} else {
			$this->options[$name] = $value;
		}
	}

	/**
	 * Execute a SELECT query based on the values in the internal arrays
	 * @param $method string Function the query should be attributed to.
	 *  You should usually use __METHOD__ here
	 * @param $extraQuery array Query data to add but not store in the object
	 *  Format is array( 'tables' => ..., 'fields' => ..., 'where' => ..., 'options' => ..., 'join_conds' => ... )
	 * @return ResultWrapper
	 */
	protected function select( $method, $extraQuery = array() ) {

		$tables = array_merge( $this->tables, isset( $extraQuery['tables'] ) ? (array)$extraQuery['tables'] : array() );
		$fields = array_merge( $this->fields, isset( $extraQuery['fields'] ) ? (array)$extraQuery['fields'] : array() );
		$where = array_merge( $this->where, isset( $extraQuery['where'] ) ? (array)$extraQuery['where'] : array() );
		$options = array_merge( $this->options, isset( $extraQuery['options'] ) ? (array)$extraQuery['options'] : array() );
		$join_conds = array_merge( $this->join_conds, isset( $extraQuery['join_conds'] ) ? (array)$extraQuery['join_conds'] : array() );

		// getDB has its own profileDBIn/Out calls
		$db = $this->getDB();

		$this->profileDBIn();
		$res = $db->select( $tables, $fields, $where, $method, $options, $join_conds );
		$this->profileDBOut();

		return $res;
	}

	/**
	 * Estimate the row count for the SELECT query that would be run if we
	 * called select() right now, and check if it's acceptable.
	 * @return bool true if acceptable, false otherwise
	 */
	protected function checkRowCount() {
		$db = $this->getDB();
		$this->profileDBIn();
		$rowcount = $db->estimateRowCount( $this->tables, $this->fields, $this->where, __METHOD__, $this->options );
		$this->profileDBOut();

		global $wgAPIMaxDBRows;
		if ( $rowcount > $wgAPIMaxDBRows ) {
			return false;
		}
		return true;
	}

	/**
	 * Add information (title and namespace) about a Title object to a
	 * result array
	 * @param $arr array Result array à la ApiResult
	 * @param $title Title
	 * @param $prefix string Module prefix
	 */
	public static function addTitleInfo( &$arr, $title, $prefix = '' ) {
		$arr[$prefix . 'ns'] = intval( $title->getNamespace() );
		$arr[$prefix . 'title'] = $title->getPrefixedText();
	}

	/**
	 * Override this method to request extra fields from the pageSet
	 * using $pageSet->requestField('fieldName')
	 * @param $pageSet ApiPageSet
	 */
	public function requestExtraData( $pageSet ) {
	}

	/**
	 * Get the main Query module
	 * @return ApiQuery
	 */
	public function getQuery() {
		return $this->mQueryModule;
	}

	/**
	 * Add a sub-element under the page element with the given page ID
	 * @param $pageId int Page ID
	 * @param $data array Data array à la ApiResult
	 * @return bool Whether the element fit in the result
	 */
	protected function addPageSubItems( $pageId, $data ) {
		$result = $this->getResult();
		$result->setIndexedTagName( $data, $this->getModulePrefix() );
		return $result->addValue( array( 'query', 'pages', intval( $pageId ) ),
			$this->getModuleName(),
			$data );
	}

	/**
	 * Same as addPageSubItems(), but one element of $data at a time
	 * @param $pageId int Page ID
	 * @param $item array Data array à la ApiResult
	 * @param $elemname string XML element name. If null, getModuleName()
	 *  is used
	 * @return bool Whether the element fit in the result
	 */
	protected function addPageSubItem( $pageId, $item, $elemname = null ) {
		if ( is_null( $elemname ) ) {
			$elemname = $this->getModulePrefix();
		}
		$result = $this->getResult();
		$fit = $result->addValue( array( 'query', 'pages', $pageId,
					 $this->getModuleName() ), null, $item );
		if ( !$fit ) {
			return false;
		}
		$result->setIndexedTagName_internal( array( 'query', 'pages', $pageId,
				$this->getModuleName() ), $elemname );
		return true;
	}

	/**
	 * Set a query-continue value
	 * @param $paramName string Parameter name
	 * @param $paramValue string Parameter value
	 */
	protected function setContinueEnumParameter( $paramName, $paramValue ) {
		$paramName = $this->encodeParamName( $paramName );
		$msg = array( $paramName => $paramValue );
		$result = $this->getResult();
		$result->disableSizeCheck();
		$result->addValue( 'query-continue', $this->getModuleName(), $msg );
		$result->enableSizeCheck();
	}

	/**
	 * Get the Query database connection (read-only)
	 * @return DatabaseBase
	 */
	protected function getDB() {
		if ( is_null( $this->mDb ) ) {
			$apiQuery = $this->getQuery();
			$this->mDb = $apiQuery->getDB();
		}
		return $this->mDb;
	}

	/**
	 * Selects the query database connection with the given name.
	 * See ApiQuery::getNamedDB() for more information
	 * @param $name string Name to assign to the database connection
	 * @param $db int One of the DB_* constants
	 * @param $groups array Query groups
	 * @return DatabaseBase
	 */
	public function selectNamedDB( $name, $db, $groups ) {
		$this->mDb = $this->getQuery()->getNamedDB( $name, $db, $groups );
	}

	/**
	 * Get the PageSet object to work on
	 * @return ApiPageSet
	 */
	protected function getPageSet() {
		return $this->getQuery()->getPageSet();
	}

	/**
	 * Convert a title to a DB key
	 * @param $title string Page title with spaces
	 * @return string Page title with underscores
	 */
	public function titleToKey( $title ) {
		// Don't throw an error if we got an empty string
		if ( trim( $title ) == '' ) {
			return '';
		}
		$t = Title::newFromText( $title );
		if ( !$t ) {
			$this->dieUsageMsg( array( 'invalidtitle', $title ) );
		}
		return $t->getPrefixedDbKey();
	}

	/**
	 * The inverse of titleToKey()
	 * @param $key string Page title with underscores
	 * @return string Page title with spaces
	 */
	public function keyToTitle( $key ) {
		// Don't throw an error if we got an empty string
		if ( trim( $key ) == '' ) {
			return '';
		}
		$t = Title::newFromDbKey( $key );
		// This really shouldn't happen but we gotta check anyway
		if ( !$t ) {
			$this->dieUsageMsg( array( 'invalidtitle', $key ) );
		}
		return $t->getPrefixedText();
	}

	/**
	 * An alternative to titleToKey() that doesn't trim trailing spaces
	 * @param $titlePart string Title part with spaces
	 * @return string Title part with underscores
	 */
	public function titlePartToKey( $titlePart ) {
		return substr( $this->titleToKey( $titlePart . 'x' ), 0, - 1 );
	}

	/**
	 * An alternative to keyToTitle() that doesn't trim trailing spaces
	 * @param $keyPart string Key part with spaces
	 * @return string Key part with underscores
	 */
	public function keyPartToTitle( $keyPart ) {
		return substr( $this->keyToTitle( $keyPart . 'x' ), 0, - 1 );
	}

	/**
	 * Gets the personalised direction parameter description
	 *
	 * @param string $p ModulePrefix
	 * @param string $extraDirText Any extra text to be appended on the description
	 * @return array
	 */
	public function getDirectionDescription( $p = '', $extraDirText = '' ) {
		return array(
				"In which direction to enumerate{$extraDirText}",
				" newer          - List oldest first. Note: {$p}start has to be before {$p}end.",
				" older          - List newest first (default). Note: {$p}start has to be later than {$p}end.",
			);
	}

	/**
	 * @param $query String
	 * @param $protocol String
	 * @return null|string
	 */
	public function prepareUrlQuerySearchString( $query = null, $protocol = null) {
		$db = $this->getDb();
		if ( !is_null( $query ) || $query != '' ) {
			if ( is_null( $protocol ) ) {
				$protocol = 'http://';
			}

			$likeQuery = LinkFilter::makeLikeArray( $query, $protocol );
			if ( !$likeQuery ) {
				$this->dieUsage( 'Invalid query', 'bad_query' );
			}

			$likeQuery = LinkFilter::keepOneWildcard( $likeQuery );
			return 'el_index ' . $db->buildLike( $likeQuery );
		} elseif ( !is_null( $protocol ) ) {
			return 'el_index ' . $db->buildLike( "$protocol", $db->anyString() );
		}

		return null;
	}

	/**
	 * Filters hidden users (where the user doesn't have the right to view them)
	 * Also adds relevant block information
	 *
	 * @param bool $showBlockInfo
	 * @return void
	 */
	public function showHiddenUsersAddBlockInfo( $showBlockInfo ) {
		$userCanViewHiddenUsers = $this->getUser()->isAllowed( 'hideuser' );

		if ( $showBlockInfo || !$userCanViewHiddenUsers ) {
			$this->addTables( 'ipblocks' );
			$this->addJoinConds( array(
				'ipblocks' => array( 'LEFT JOIN', 'ipb_user=user_id' ),
			) );

			$this->addFields( 'ipb_deleted' );

			if ( $showBlockInfo ) {
				$this->addFields( array( 'ipb_id', 'ipb_by', 'ipb_by_text', 'ipb_reason', 'ipb_expiry' ) );
			}

			// Don't show hidden names
			if ( !$userCanViewHiddenUsers ) {
				$this->addWhere( 'ipb_deleted = 0 OR ipb_deleted IS NULL' );
			}
		}
	}

	/**
	 * @param $hash string
	 * @return bool
	 */
	public function validateSha1Hash( $hash ) {
		return preg_match( '/[a-fA-F0-9]{40}/', $hash );
	}

	/**
	 * @param $hash string
	 * @return bool
	 */
	public function validateSha1Base36Hash( $hash ) {
		return preg_match( '/[a-zA-Z0-9]{31}/', $hash );
	}

	/**
	 * @return array
	 */
	public function getPossibleErrors() {
		return array_merge( parent::getPossibleErrors(), array(
			array( 'invalidtitle', 'title' ),
			array( 'invalidtitle', 'key' ),
		) );
	}

	/**
	 * Get version string for use in the API help output
	 * @return string
	 */
	public static function getBaseVersion() {
		return __CLASS__ . ': $Id$';
	}
}

/**
 * @ingroup API
 */
abstract class ApiQueryGeneratorBase extends ApiQueryBase {

	private $mIsGenerator;

	/**
	 * @param $query ApiBase
	 * @param $moduleName string
	 * @param $paramPrefix string
	 */
	public function __construct( $query, $moduleName, $paramPrefix = '' ) {
		parent::__construct( $query, $moduleName, $paramPrefix );
		$this->mIsGenerator = false;
	}

	/**
	 * Switch this module to generator mode. By default, generator mode is
	 * switched off and the module acts like a normal query module.
	 */
	public function setGeneratorMode() {
		$this->mIsGenerator = true;
	}

	/**
	 * Overrides base class to prepend 'g' to every generator parameter
	 * @param $paramName string Parameter name
	 * @return string Prefixed parameter name
	 */
	public function encodeParamName( $paramName ) {
		if ( $this->mIsGenerator ) {
			return 'g' . parent::encodeParamName( $paramName );
		} else {
			return parent::encodeParamName( $paramName );
		}
	}

	/**
	 * Execute this module as a generator
	 * @param $resultPageSet ApiPageSet: All output should be appended to
	 *  this object
	 */
	public abstract function executeGenerator( $resultPageSet );
}
