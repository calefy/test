<?php /* Smarty version Smarty-3.1.5, created on 2011-12-12 06:29:13
         compiled from "C:/xampp/htdocs/test/includes/common/../../templates\login\login_form.html" */ ?>
<?php /*%%SmartyHeaderCode:214914ee59129028800-79576939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28662c304dd9fcaa0fde731fd3791c6a8aadb4ab' => 
    array (
      0 => 'C:/xampp/htdocs/test/includes/common/../../templates\\login\\login_form.html',
      1 => 1321923814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214914ee59129028800-79576939',
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
  'unifunc' => 'content_4ee591291376e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ee591291376e')) {function content_4ee591291376e($_smarty_tpl) {?><form action="/login/login.php" method="post" class="ui_form">
	<fieldset>
		<legend>用户登录</legend>
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
			<div class="retract">
				<P>
					<input type="submit" value="登录" />
					<input type="reset" value="重置" />
					<a href="/reg/reg.php">还没有账户？点击注册</a>
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