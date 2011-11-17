<?php
include('../includes/smarty/main.php');

//验证登陆
//

//密码错误
$smarty->assign('acount', $_POST['acount']);
$smarty->assign('password', $_POST['password']);
$smarty->assign('title', '用户登录');
$smarty->display('index.html');
?>
