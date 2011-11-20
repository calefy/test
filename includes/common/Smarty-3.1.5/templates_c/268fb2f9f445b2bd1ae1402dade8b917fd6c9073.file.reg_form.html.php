<?php /* Smarty version Smarty-3.1.5, created on 2011-11-20 09:04:35
         compiled from "D:/xampp/htdocs/test/includes/common/../../templates\reg\reg_form.html" */ ?>
<?php /*%%SmartyHeaderCode:16224ec882bb1b9fd5-21650698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '268fb2f9f445b2bd1ae1402dade8b917fd6c9073' => 
    array (
      0 => 'D:/xampp/htdocs/test/includes/common/../../templates\\reg\\reg_form.html',
      1 => 1321776240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16224ec882bb1b9fd5-21650698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ec882bb2493e',
  'variables' => 
  array (
    'account' => 0,
    'email' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec882bb2493e')) {function content_4ec882bb2493e($_smarty_tpl) {?><form action="/reg/reg.php" method="post">
	<fieldset>
		<legend>用户注册</legend>
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
			<p>
				<label for="password2">确认密码：</label>
				<input type="password" id="password2" name="password2" />
			</p>
			<p>
				<label for="email">邮箱：</label>
				<input type="text" id="email" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['email']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
			</p>
			<div>
				<input type="submit" value="确定" />
				<input type="reset" value="重置" />
				<a href="/login/login.php">已有账户？点击登录</a>
			</div>
			<p class="error"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>
</p>
		</div>
	</fieldset>
</form>

<?php }} ?>