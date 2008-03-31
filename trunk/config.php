<?php

/**
* Configuration for grinder
*/
class Config{
	/**
	* Regex that matches the trace files generated by xdebug
	*/
	public static $xdebugOutputFormat = '/^cachegrind\.out\.[0-9]+$/';
	
	/**
	* Directory to search for trace files
	*/
	public static $xdebugOutputDir = '/tmp/';
	
	/**
	* Writable dir for information storage
	*/
	public static $storageDir = '/tmp/';
		
	/**
	* Suffix for preprocessed files
	*/
	public static $preprocessedSuffix = '.prep';
	
	/**
	 * Default timezone
	 */
	public static $defaultTimezone = 'Europe/Copenhagen';
	/**
	 * Date format
	 */
	public static $dateFormat = 'Y-m-d H:i:s';
	
	/**
	* sprintf compatible format for generating links to source files. 
	* %1$s will be replaced by the full path name of the file
	* %2$d will be replaced by the linenumber
	*/
	public static $fileUrlFormat = 'fileviewer.php?file=%1$s&line=%2$d'; // Built in fileviewer
	//public static $fileUrlFormat = 'txmt://open/?url=file://%1$s&line=%2$d'; // Textmate
	//public static $fileUrlFormat = 'file://%1$s'; // ?
	
	/**
	* Selftrace datafile
	*/
	public static $selftrace = 'selftrace';
	
}
