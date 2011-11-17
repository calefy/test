<?php
require 'libs/Smarty.class.php';
define('SMARTY_ROOT', '.');
$smarty = new Smarty();

$smarty->template_dir = '../templates';
$smarty->compile_dir = SMARTY_ROOT.'/templates_c';
$smarty->config_dir = SMARTY_ROOT.'/config';
$smarty->cache_dir = SMARTY_ROOT.'/cache';
$smarty->debugging = false;
$smarty->caching = 0;
$smarty->cache_lifetime = 60*60*24;
$smarty->left_delimiter = '{{';
$smarty->right_delimiter = '}}';

/*
// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require('guestbook/guestbook.lib.php');是一个很好的加载应用程序的类库文件(就是扩展类)
//例如你可以在index文件里包含它

class Smarty_GuestBook extends Smarty {

 function Smarty_GuestBook() {
 
 		// Class Constructor. These automatically get set with each new instance.
 //类构造函数.创建实例的时候自动配置

		$this->Smarty();

		$this->template_dir = '/web/www.mydomain.com/smarty/guestbook/templates/';
		$this->compile_dir = '/web/www.mydomain.com/smarty/guestbook/templates_c/';
		$this->config_dir = '/web/www.mydomain.com/smarty/guestbook/configs/';
		$this->cache_dir = '/web/www.mydomain.com/smarty/guestbook/cache/'; 
		
		$this->caching = true;
		$this->assign('app_name','Guest Book');
 }

}


$smarty = new Smarty_GuestBook;

$smarty->assign('name','Ned');

$smarty->display('index.tpl');

 * */
?>
