<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 10:49:27
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\search\search-form.main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6232268276493fd073a30c0-69599288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4acf0631f5a9beb9d747668ef8792c1f9adcf861' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\search\\search-form.main.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6232268276493fd073a30c0-69599288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchType' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6493fd073c0e52_46727621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6493fd073c0e52_46727621')) {function content_6493fd073c0e52_46727621($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_router')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('searchType','mods','classes','attributes')),$_smarty_tpl);?>


<?php ob_start();?><?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['searchType']->value)===null||$tmp==='' ? 'topics' : $tmp);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'search-form','name'=>'main','action'=>$_tmp1.$_tmp2,'params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>
<?php }} ?>