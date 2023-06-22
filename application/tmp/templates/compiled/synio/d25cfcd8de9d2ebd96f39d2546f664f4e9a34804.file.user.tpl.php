<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 11:01:37
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\menu\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13491554876493ffe17bd325-24345653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd25cfcd8de9d2ebd96f39d2546f664f4e9a34804' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\menu\\user.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13491554876493ffe17bd325-24345653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6493ffe17fb477_16035360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6493ffe17fb477_16035360')) {function content_6493ffe17fb477_16035360($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_router')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>
<?php if (is_array($_smarty_tpl->tpl_vars['params']->value['items'])){?>
    <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'auth.logout'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'auth'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['items'][] = array('name'=>'logout','text'=>$_tmp1,'url'=>$_tmp2."logout/?security_ls_key=".((string)$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value));?>
<?php }?>
 
<?php echo smarty_function_component(array('_default_short'=>'nav','classes'=>'ls-userbar-user-nav-menu js-userbar-user-nav-menu','hook'=>'user','hookParams'=>array('user'=>$_smarty_tpl->tpl_vars['oUserCurrent']->value),'params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>

<?php }} ?>