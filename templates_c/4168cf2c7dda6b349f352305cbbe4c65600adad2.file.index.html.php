<?php /* Smarty version Smarty-3.1.5, created on 2011-11-17 16:48:04
         compiled from "templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:54054ec51f60328233-71447906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4168cf2c7dda6b349f352305cbbe4c65600adad2' => 
    array (
      0 => 'templates\\index.html',
      1 => 1321544882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54054ec51f60328233-71447906',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ec51f60394a4',
  'variables' => 
  array (
    'acount' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec51f60394a4')) {function content_4ec51f60394a4($_smarty_tpl) {?>
<h2>用户登录</h2>
<hr />
<form action="/login/login.php" method="post">
	<fieldset>
		<legend>用户登录</legend>
		<div>
			<p>
				<label for="acount">账号：</label>
				<input type="text" id="acount" name="acount" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['acount']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
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

<?php echo $_smarty_tpl->getSubTemplate ("foot/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>