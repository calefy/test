<?php
session_start();
require_once('./includes/common/CSmarty.php');

$smarty = new CSmarty();

if( isset($_SESSION['user']) ){
	$smarty->assign('user', $_SESSION['user']);
	$smarty->assign('title', '欢迎');
	$smarty->display('index.html');
}else{
	$smarty->assign('title', '欢迎进入Military');
	$smarty->display('welcom.html');
}

?>
