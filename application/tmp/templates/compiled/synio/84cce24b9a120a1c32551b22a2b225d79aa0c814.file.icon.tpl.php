<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 11:02:12
         compiled from "C:\xampp\htdocs\framework\frontend\components\icon\icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1812548357649400046ca0d4-47644135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84cce24b9a120a1c32551b22a2b225d79aa0c814' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\icon\\icon.tpl',
      1 => 1687101138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1812548357649400046ca0d4-47644135',
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
  'unifunc' => 'content_649400046ea438_56471246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_649400046ea438_56471246')) {function content_649400046ea438_56471246($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('fa', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('icon','mods','classes','attributes')),$_smarty_tpl);?>


<i class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 fa-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value,'delimiter'=>'-'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
></i><?php }} ?>