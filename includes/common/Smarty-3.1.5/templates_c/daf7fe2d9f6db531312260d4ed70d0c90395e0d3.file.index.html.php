<?php /* Smarty version Smarty-3.1.5, created on 2011-11-20 05:45:24
         compiled from "D:/xampp/htdocs/test/includes/common/../../templates\login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:188034ec885e4ac90c5-24020830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daf7fe2d9f6db531312260d4ed70d0c90395e0d3' => 
    array (
      0 => 'D:/xampp/htdocs/test/includes/common/../../templates\\login\\index.html',
      1 => 1321764237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188034ec885e4ac90c5-24020830',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ec885e4b194e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec885e4b194e')) {function content_4ec885e4b194e($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../head/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2>用户登录</h2>
<hr />
<?php echo $_smarty_tpl->getSubTemplate ('./login_form.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('../foot/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>