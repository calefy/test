<?php /* Smarty version Smarty-3.1.5, created on 2011-11-20 11:20:44
         compiled from "D:/xampp/htdocs/test/includes/common/../../templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:299174ec87a9b6f2294-66393751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1baaa1c2f5239eca28c7b35302b015fd333cd3b3' => 
    array (
      0 => 'D:/xampp/htdocs/test/includes/common/../../templates\\index.html',
      1 => 1321784437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299174ec87a9b6f2294-66393751',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ec87a9b9a16f',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec87a9b9a16f')) {function content_4ec87a9b9a16f($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./head/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<h2>Military</h2>
<hr />
<ul>
	<li>
		<a href="/login/login_out.php">退出</a>
	</li>
</ul>
<div>
	<p>Welcom Login in!</p>
	User info: 
	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value['account'])===null||$tmp==='' ? '' : $tmp);?>

	-----
	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value['email'])===null||$tmp==='' ? '' : $tmp);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('./foot/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>