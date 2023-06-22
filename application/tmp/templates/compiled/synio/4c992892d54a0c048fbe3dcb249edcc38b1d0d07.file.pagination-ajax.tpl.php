<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 11:02:33
         compiled from "C:\xampp\htdocs\framework\frontend\components\pagination\pagination-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156817674164940019c28839-74957756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c992892d54a0c048fbe3dcb249edcc38b1d0d07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\pagination\\pagination-ajax.tpl',
      1 => 1687101140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156817674164940019c28839-74957756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_64940019c410e9_87956182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64940019c410e9_87956182')) {function content_64940019c410e9_87956182($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-pagination', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('mods','classes','attributes')),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." ajax", null, 0);?>

<nav class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
></nav><?php }} ?>