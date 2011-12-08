<?php /* Smarty version Smarty-3.1.5, created on 2011-12-08 17:11:06
         compiled from "D:/xampp/htdocs/test/includes/common/../../templates\welcom.html" */ ?>
<?php /*%%SmartyHeaderCode:191174ec8845191e558-78306993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58054d37ccca2eebe74001478dba21cb33baf561' => 
    array (
      0 => 'D:/xampp/htdocs/test/includes/common/../../templates\\welcom.html',
      1 => 1323357851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191174ec8845191e558-78306993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ec8845196ef9',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec8845196ef9')) {function content_4ec8845196ef9($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div>
	<p>Welcom!</p>
	<?php echo $_smarty_tpl->getSubTemplate ('login/login_form.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('foot/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>