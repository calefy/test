<?php
include('includes/smarty/main.php');

//如果未登录
$smarty->assign('title', 'test title');
$smarty->display('templates/index.html');

?>
