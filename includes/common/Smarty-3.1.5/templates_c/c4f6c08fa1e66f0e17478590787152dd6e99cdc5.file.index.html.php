<?php /* Smarty version Smarty-3.1.5, created on 2011-12-13 07:41:21
         compiled from "C:/xampp/htdocs/test/includes/common/../../templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:219524ee6f391c08a42-60887292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4f6c08fa1e66f0e17478590787152dd6e99cdc5' => 
    array (
      0 => 'C:/xampp/htdocs/test/includes/common/../../templates\\index.html',
      1 => 1323667553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219524ee6f391c08a42-60887292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ee6f391d1c2e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ee6f391d1c2e')) {function content_4ee6f391d1c2e($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div>
	<p>Welcom Login in!</p>
	User info: 
	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value['account'])===null||$tmp==='' ? '' : $tmp);?>

	-----
	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value['email'])===null||$tmp==='' ? '' : $tmp);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('foot/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>