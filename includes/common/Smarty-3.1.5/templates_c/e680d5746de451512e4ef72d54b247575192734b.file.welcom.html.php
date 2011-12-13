<?php /* Smarty version Smarty-3.1.5, created on 2011-12-12 06:29:12
         compiled from "C:/xampp/htdocs/test/includes/common/../../templates\welcom.html" */ ?>
<?php /*%%SmartyHeaderCode:125894ee59128886988-23607026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e680d5746de451512e4ef72d54b247575192734b' => 
    array (
      0 => 'C:/xampp/htdocs/test/includes/common/../../templates\\welcom.html',
      1 => 1323667553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125894ee59128886988-23607026',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ee59128a2950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ee59128a2950')) {function content_4ee59128a2950($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div>
	<p>Welcom!</p>
	<?php echo $_smarty_tpl->getSubTemplate ('login/login_form.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('foot/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>