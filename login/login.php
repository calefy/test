<?php
require_once('../includes/common/CSmarty.php');

//验证登陆
//

//密码错误
$smarty = new CSmarty();
$smarty->assign('acount', $_POST['acount']);
$smarty->assign('password', $_POST['password']);
$smarty->assign('title', '用户登录');
$smarty->display('index.html');
?>
