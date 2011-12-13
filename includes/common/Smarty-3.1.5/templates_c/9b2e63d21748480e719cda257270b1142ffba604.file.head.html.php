<?php /* Smarty version Smarty-3.1.5, created on 2011-12-12 06:29:12
         compiled from "C:/xampp/htdocs/test/includes/common/../../templates\head\head.html" */ ?>
<?php /*%%SmartyHeaderCode:221144ee59128cddd96-54922139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b2e63d21748480e719cda257270b1142ffba604' => 
    array (
      0 => 'C:/xampp/htdocs/test/includes/common/../../templates\\head\\head.html',
      1 => 1323667553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221144ee59128cddd96-54922139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ee59128d9b45',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ee59128d9b45')) {function content_4ee59128d9b45($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<link rel="stylesheet" type="text/css" href="/css/global.css" />
	</head>
	<body>
		<div class="header fix">
			<h1>Military</h1>
			<ul>
				<?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?>
				<li><a href="/login/login_out.php">退出</a></li>
				<?php }?>
			</ul>
		</div>
		<div class="content">
<?php }} ?>