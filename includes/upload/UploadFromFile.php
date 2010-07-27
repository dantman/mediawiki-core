<?php
/**
 * @file
 * @ingroup upload
 *
 * @author Bryan Tong Minh
 *
 * Implements regular file uploads
 */
class UploadFromFile extends UploadBase {
	protected $mWebUpload = null;

	function initializeFromRequest( &$request ) {
		$this->mWebUpload = $request->getUpload( 'wpUploadFile' );		
		
		$desiredDestName = $request->getText( 'wpDestFile' );
		if( !$desiredDestName )
			$desiredDestName = $this->mWebUpload->getName();
		return $this->initializePathInfo(
			$desiredDestName,
			$this->mWebUpload->getTempName(),
			$this->mWebUpload->getSize()
		);
	}
	/**
	 * Entry point for upload from file.
	 */
	function initialize( $name, $tempPath, $fileSize ) {
		 return $this->initializePathInfo( $name, $tempPath, $fileSize );
	}
	static function isValidRequest( $request ) {
		# Allow all requests, even if no file is present, so that an error
		# because a post_max_size or upload_max_filesize overflow
		return true;
	}
	
	public function verifyUpload() {
		# Check for a post_max_size or upload_max_size overflow, so that a 
		# proper error can be shown to the user
		if ( is_null( $this->mTempPath ) || $this->isEmptyFile() ) {
			if ( $this->mWebUpload->isIniSizeOverflow() ) {
				global $wgMaxUploadSize;
				return array( 
					'status' => self::FILE_TOO_LARGE,
					'max' => min( 
						$wgMaxUploadSize, 
						wfShorthandToInteger( ini_get( 'upload_max_filesize' ) ), 
						wfShorthandToInteger( ini_get( 'post_max_size' ) )
					),
				);
			}
		}
		
		return parent::verifyUpload();
	}
}
