<?php /* Smarty version Smarty-3.1.5, created on 2011-12-08 17:16:32
         compiled from "D:/xampp/htdocs/test/includes/common/../../templates\head\head.html" */ ?>
<?php /*%%SmartyHeaderCode:295744ee0e19aae8222-71670868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43be1c172678d93fbf498fc5b4df8b17af73eb7a' => 
    array (
      0 => 'D:/xampp/htdocs/test/includes/common/../../templates\\head\\head.html',
      1 => 1323360987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295744ee0e19aae8222-71670868',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ee0e19ab17c5',
  'variables' => 
  array (
    'title' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ee0e19ab17c5')) {function content_4ee0e19ab17c5($_smarty_tpl) {?><!DOCTYPE html>
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