<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 10:49:38
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\admin\toolbar.admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:653910316493fd12a85064-75564891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79f64985fe3883c596e7b74a16cbcb9a82e12ca2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\admin\\toolbar.admin.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '653910316493fd12a85064-75564891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6493fd12aa3303_42687303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6493fd12aa3303_42687303')) {function content_6493fd12aa3303_42687303($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
    <?php ob_start();?><?php echo smarty_function_router(array('_default_short'=>'admin'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'admin.title'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar.item','html'=>'<i class="ls-toolbar-icon"></i>','url'=>$_tmp1,'attributes'=>array('title'=>$_tmp2),'mods'=>'admin'),$_smarty_tpl);?>

<?php }?><?php }} ?>