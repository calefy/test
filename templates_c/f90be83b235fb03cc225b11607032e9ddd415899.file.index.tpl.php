<?php /* Smarty version Smarty-3.1.5, created on 2011-11-17 16:06:06
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59664ec522de9d5fa5-61793066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90be83b235fb03cc225b11607032e9ddd415899' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1321542355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59664ec522de9d5fa5-61793066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ec522dea4cbb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec522dea4cbb')) {function content_4ec522dea4cbb($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>111</title>
		<style type="text/css" src="css/global.css"></style>
	</head>
	<body>
		<h2>用户登录</h2>
		<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

		<hr />
		<form action="login/login.php" method="post">
			<fieldset>
				<legend>用户登录</legend>
				<div>
					<p>
						<label for="acount">账号：</label>
						<input type="text" id="acount" name="acount" />
					</p>
					<p>
						<label for="password">密码：</label>
						<input type="password" id="password" name="password" />
					</p>
					<div>
						<input type="submit" value="登录" />
						<input type="reset" value="重置" />
						<span class="error">密码错误</span>
					</div>
				</div>
			</fieldset>
		</form>
	</body>
</html>
<?php }} ?>