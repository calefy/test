<?php /* Smarty version Smarty-3.1.5, created on 2011-12-13 07:41:10
         compiled from "C:/xampp/htdocs/test/includes/common/../../templates\reg\index.html" */ ?>
<?php /*%%SmartyHeaderCode:8604ee6f3861c4825-06343373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ffe809387f955cb0af3d7d05e0e8f59f1a72581' => 
    array (
      0 => 'C:/xampp/htdocs/test/includes/common/../../templates\\reg\\index.html',
      1 => 1323667553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8604ee6f3861c4825-06343373',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ee6f3863e720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ee6f3863e720')) {function content_4ee6f3863e720($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2>用户注册</h2>
<hr />
<?php echo $_smarty_tpl->getSubTemplate ('reg/reg_form.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('foot/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>