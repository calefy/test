<?php /* Smarty version Smarty-3.1.5, created on 2011-11-20 10:20:47
         compiled from "D:\xampp\htdocs\test\templates\reg\reg_form.html" */ ?>
<?php /*%%SmartyHeaderCode:40104ec8b4a671ef10-92295184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec41920399161a69e5af00ac5dbf5572180cb114' => 
    array (
      0 => 'D:\\xampp\\htdocs\\test\\templates\\reg\\reg_form.html',
      1 => 1321780794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40104ec8b4a671ef10-92295184',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ec8b4a677161',
  'variables' => 
  array (
    'data' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec8b4a677161')) {function content_4ec8b4a677161($_smarty_tpl) {?><form action="/reg/reg.php" method="post" class="ui_form">
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