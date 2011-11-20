<?php /* Smarty version Smarty-3.1.5, created on 2011-11-20 09:04:54
         compiled from "D:/xampp/htdocs/test/includes/common/../../templates\reg\index.html" */ ?>
<?php /*%%SmartyHeaderCode:252374ec8b4a66bc043-37209939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89d26848ddff51ec3b94c60aed5199bd207691ef' => 
    array (
      0 => 'D:/xampp/htdocs/test/includes/common/../../templates\\reg\\index.html',
      1 => 1321776134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252374ec8b4a66bc043-37209939',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ec8b4a670f4e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec8b4a670f4e')) {function content_4ec8b4a670f4e($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../head/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2>用户注册</h2>
<hr />
<?php echo $_smarty_tpl->getSubTemplate ('./reg_form.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('../foot/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>