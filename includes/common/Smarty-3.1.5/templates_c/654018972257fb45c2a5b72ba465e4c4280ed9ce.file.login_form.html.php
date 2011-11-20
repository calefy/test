<?php /* Smarty version Smarty-3.1.5, created on 2011-11-20 11:15:13
         compiled from "D:\xampp\htdocs\test\templates\login\login_form.html" */ ?>
<?php /*%%SmartyHeaderCode:60464ec885a638e753-00155027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '654018972257fb45c2a5b72ba465e4c4280ed9ce' => 
    array (
      0 => 'D:\\xampp\\htdocs\\test\\templates\\login\\login_form.html',
      1 => 1321783931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60464ec885a638e753-00155027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ec885a63bf1b',
  'variables' => 
  array (
    'data' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec885a63bf1b')) {function content_4ec885a63bf1b($_smarty_tpl) {?><form action="/login/login.php" method="post" class="ui_form">
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