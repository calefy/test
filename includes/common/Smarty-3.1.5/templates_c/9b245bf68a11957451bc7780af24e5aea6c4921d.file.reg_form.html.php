<?php /* Smarty version Smarty-3.1.5, created on 2011-12-13 07:41:10
         compiled from "C:/xampp/htdocs/test/includes/common/../../templates\reg\reg_form.html" */ ?>
<?php /*%%SmartyHeaderCode:98294ee6f3864cd9c1-40582422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b245bf68a11957451bc7780af24e5aea6c4921d' => 
    array (
      0 => 'C:/xampp/htdocs/test/includes/common/../../templates\\reg\\reg_form.html',
      1 => 1321923814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98294ee6f3864cd9c1-40582422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ee6f3865dad7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ee6f3865dad7')) {function content_4ee6f3865dad7($_smarty_tpl) {?><form action="/reg/reg.php" method="post" class="ui_form">
	<fieldset>
		<legend>用户注册</legend>
		<div>
			<p class="row">
				<label for="account">账号：</label>
				<input type="text" id="account" name="account" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['account'])===null||$tmp==='' ? '' : $tmp);?>
" />
			</p>
			<p class="row">
				<label for="password">密码：</label>
				<input type="password" id="password" name="password" />
			</p>
			<p class="row">
				<label for="password2">确认密码：</label>
				<input type="password" id="password2" name="password2" />
			</p>
			<p class="row">
				<label for="email">邮箱：</label>
				<input type="text" id="email" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" />
			</p>
			<div class="retract">
				<p>
					<input type="submit" value="确定" />
					<input type="reset" value="重置" />
					<a href="/login/login.php">已有账户？点击登录</a>
				</p>
				<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
				<p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
				<?php }?>
			</div>
		</div>
	</fieldset>
</form>

<?php }} ?>