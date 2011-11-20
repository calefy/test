<?php /* Smarty version Smarty-3.1.5, created on 2011-11-20 05:44:28
         compiled from "D:/xampp/htdocs/test/includes/common/../../templates\login\login_form.html" */ ?>
<?php /*%%SmartyHeaderCode:15604ec88174b43497-53299410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91584030afcdd77eca4e1652017fe6198fe73985' => 
    array (
      0 => 'D:/xampp/htdocs/test/includes/common/../../templates\\login\\login_form.html',
      1 => 1321764223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15604ec88174b43497-53299410',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ec88174bbbfa',
  'variables' => 
  array (
    'account' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec88174bbbfa')) {function content_4ec88174bbbfa($_smarty_tpl) {?><form action="/login/login.php" method="post">
	<fieldset>
		<legend>用户登录</legend>
		<div>
			<p>
				<label for="account">账号：</label>
				<input type="text" id="account" name="account" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['account']->value)===null||$tmp==='' ? '' : $tmp);?>
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

<?php }} ?>