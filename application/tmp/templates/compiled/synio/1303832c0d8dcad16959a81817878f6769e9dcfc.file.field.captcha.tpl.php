<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 10:49:31
         compiled from "C:\xampp\htdocs\framework\frontend\components\field\field.captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13668938226493fd0b6e86f1-70174994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1303832c0d8dcad16959a81817878f6769e9dcfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\field\\field.captcha.tpl',
      1 => 1687101138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13668938226493fd0b6e86f1-70174994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'captchaType' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6493fd0b6fff86_51744830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6493fd0b6fff86_51744830')) {function content_6493fd0b6fff86_51744830($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('label','captchaName','name','captchaType','mods','attributes','classes')),$_smarty_tpl);?>


<?php echo smarty_function_component(array('_default_short'=>'field','template'=>"captcha-".((string)$_smarty_tpl->tpl_vars['captchaType']->value),'params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>
<?php }} ?>