<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 11:01:24
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\menu\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15127622146493ffd4af1ce3-08075332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '754a5ccffa5b8e046088db7b3ad1cc172755ecfe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\menu\\menu.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15127622146493ffd4af1ce3-08075332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template' => 0,
    'params' => 0,
    'activeItem' => 0,
    'mods' => 0,
    'classes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6493ffd4b70990_46497967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6493ffd4b70990_46497967')) {function content_6493ffd4b70990_46497967($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('activeItem','mods','classes','template')),$_smarty_tpl);?>
 

<?php echo smarty_function_component(array('_default_short'=>"menu.".((string)$_smarty_tpl->tpl_vars['template']->value),'params'=>$_smarty_tpl->tpl_vars['params']->value,'activeItem'=>$_smarty_tpl->tpl_vars['activeItem']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value,'classes'=>$_smarty_tpl->tpl_vars['classes']->value),$_smarty_tpl);?>

<?php }} ?>