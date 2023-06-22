<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 10:49:28
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\syn-icon\icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7683893396493fd08d82048-38813403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0dae500a0821fe1c5aee460fa018e8482fb60f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\syn-icon\\icon.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7683893396493fd08d82048-38813403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'icon' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6493fd08d9aa01_59011233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6493fd08d9aa01_59011233')) {function content_6493fd08d9aa01_59011233($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?><?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('syn-icon', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('icon','mods','classes','attributes')),$_smarty_tpl);?>


<i class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
></i><?php }} ?>