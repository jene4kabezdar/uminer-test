<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 10:49:21
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\activity\blocks\block.activity-recent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7674634226493fd013bd2a5-46399313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25e5236fba9f5400f5209f03ba23ab180c4894c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\activity\\blocks\\block.activity-recent.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7674634226493fd013bd2a5-46399313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6493fd01408f07_60121006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6493fd01408f07_60121006')) {function content_6493fd01408f07_60121006($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_router')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('content')),$_smarty_tpl);?>



<?php $_smarty_tpl->_capture_stack[0][] = array('block_footer', null, null); ob_start(); ?>
    <a href="<?php echo smarty_function_router(array('_default_short'=>'stream'),$_smarty_tpl);?>
"><?php echo smarty_function_lang(array('_default_short'=>'activity.block_recent.all'),$_smarty_tpl);?>
</a> ·
    <a href="<?php echo smarty_function_router(array('_default_short'=>'rss'),$_smarty_tpl);?>
allcomments/"><?php echo smarty_function_lang(array('_default_short'=>'activity.block_recent.feed'),$_smarty_tpl);?>
</a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'activity.block_recent.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('_default_short'=>'stream'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'activity.block_recent.comments'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'ajax'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'activity.block_recent.topics'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'ajax'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'primary activity-recent','classes'=>'js-block-default js-activity-block-recent','title'=>$_tmp1,'titleUrl'=>$_tmp2,'footer'=>Smarty::$_smarty_vars['capture']['block_footer'],'tabs'=>array('classes'=>'js-tabs-block js-activity-block-recent-tabs','tabs'=>array(array('text'=>$_tmp3,'url'=>$_tmp4."stream/comment",'list'=>$_smarty_tpl->tpl_vars['content']->value),array('text'=>$_tmp5,'url'=>$_tmp6."stream/topic")))),$_smarty_tpl);?>
<?php }} ?>