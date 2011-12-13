<?php /* Smarty version Smarty-3.1.5, created on 2011-12-13 07:41:31
         compiled from "C:/xampp/htdocs/test/includes/common/../../templates\login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:130494ee6f39b458af9-90909802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7db13dca8dc7045e0d7d92ac6f675121e3f79298' => 
    array (
      0 => 'C:/xampp/htdocs/test/includes/common/../../templates\\login\\index.html',
      1 => 1323667553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130494ee6f39b458af9-90909802',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ee6f39b518a9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ee6f39b518a9')) {function content_4ee6f39b518a9($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2>用户登录</h2>
<hr />
<?php echo $_smarty_tpl->getSubTemplate ('login/login_form.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('foot/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>