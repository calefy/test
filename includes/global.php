<?php

function __autoload($class){
	require_once( "classes/$class.class.php" );
}

?>
