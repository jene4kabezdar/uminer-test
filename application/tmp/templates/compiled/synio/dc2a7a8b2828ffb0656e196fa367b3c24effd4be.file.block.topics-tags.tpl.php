<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 10:49:23
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\topic\blocks\block.topics-tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5378259376493fd0365c342-72569078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc2a7a8b2828ffb0656e196fa367b3c24effd4be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\topic\\blocks\\block.topics-tags.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5378259376493fd0365c342-72569078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'tagsUser' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6493fd0368b121_91600877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6493fd0368b121_91600877')) {function content_6493fd0368b121_91600877($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('tags','tagsUser')),$_smarty_tpl);?>


<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'tags.block_tags.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'tags.block_tags.nav.all'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'tags','template'=>'cloud','tags'=>$_smarty_tpl->tpl_vars['tags']->value),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'tags.block_tags.nav.favourite'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'tags','template'=>'cloud','tags'=>$_smarty_tpl->tpl_vars['tagsUser']->value),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','title'=>$_tmp1,'classes'=>'js-block-default','tabs'=>array('tabs'=>array(array('text'=>$_tmp2,'content'=>$_tmp3),array('text'=>$_tmp4,'content'=>$_tmp5,'is_enabled'=>!!$_smarty_tpl->tpl_vars['oUserCurrent']->value)))),$_smarty_tpl);?>
<?php }} ?>