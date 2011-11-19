<?php
require_once('./includes/common/CSmarty.php');

//如果未登录
$smarty = new CSmarty();
$smarty->assign('title', 'test title index');
$smarty->display('index.html');

?>
