<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 10:49:24
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\blog\blocks\block.blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1288435366493fd04e4acd5-24927586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '667a5175b44823b2d7c92408bc50cbab361ee43d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\blog\\blocks\\block.blogs.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1288435366493fd04e4acd5-24927586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sBlogsTop' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6493fd04ec7013_91058566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6493fd04ec7013_91058566')) {function content_6493fd04ec7013_91058566($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('block_footer', null, null); ob_start(); ?>
    <a href="<?php echo smarty_function_router(array('_default_short'=>'blogs'),$_smarty_tpl);?>
"><?php echo smarty_function_lang(array('_default_short'=>'synio.all_blogs'),$_smarty_tpl);?>
</a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'blog.blocks.blogs.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'blog.blocks.blogs.nav.top'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'ajax'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'blog.blocks.blogs.nav.joined'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'ajax'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'blog.blocks.blogs.nav.self'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'ajax'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'blogs','classes'=>'blog-block-blogs js-block-default','title'=>$_tmp1,'titleUrl'=>$_tmp2,'footer'=>Smarty::$_smarty_vars['capture']['block_footer'],'tabs'=>array('classes'=>'js-tabs-block','tabs'=>array(array('text'=>$_tmp3,'url'=>$_tmp4."blogs/top",'list'=>$_smarty_tpl->tpl_vars['sBlogsTop']->value),array('text'=>$_tmp5,'url'=>$_tmp6."blogs/join",'is_enabled'=>!!$_smarty_tpl->tpl_vars['oUserCurrent']->value),array('text'=>$_tmp7,'url'=>$_tmp8."blogs/self",'is_enabled'=>!!$_smarty_tpl->tpl_vars['oUserCurrent']->value)))),$_smarty_tpl);?>
<?php }} ?>