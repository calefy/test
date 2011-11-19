<?php
/**
 * Copyright (c) 2011
 * All rights reserved.
 *
 * 文件名称：CDatabase.php
 * 版    本：1.0
 * 作    者：linfei
 * ready
 */
Class CDatabase extends mysqli{
	function __construct(){
		parent::__construct();

		$host   = 'localhost';
		$dbname = 'military';
		$uname  = 'sa';
		$upwd   = 'sa';
		
		$this->connect( $host, $uname, $upwd, $dbname );
		$errno = mysqli_connect_errno();
		if( $errno ){
			echo '【 A connection error occurred. Please try agin later. Errno: ' . $errno . ' 】';
		}
	}
	function __destruct(){
		$this->close();	
	}


}

?>
