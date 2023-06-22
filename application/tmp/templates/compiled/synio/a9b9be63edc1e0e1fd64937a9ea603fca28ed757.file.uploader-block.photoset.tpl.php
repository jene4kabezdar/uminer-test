<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 11:02:33
         compiled from "C:\xampp\htdocs\application\frontend\components\media\uploader\uploader-block.photoset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1645847285649400198f54e8-79838371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9b9be63edc1e0e1fd64937a9ea603fca28ed757' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\media\\uploader\\uploader-block.photoset.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1645847285649400198f54e8-79838371',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6494001990feb9_95717900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6494001990feb9_95717900')) {function content_6494001990feb9_95717900($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('block_content', null, null); ob_start(); ?>
    <form method="post" action="" enctype="multipart/form-data">
        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.photoset.settings.fields.use_thumbs.label'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','name'=>'use_thumbs','checked'=>true,'label'=>$_tmp1),$_smarty_tpl);?>


        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.photoset.settings.fields.show_caption.label'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','name'=>'show_caption','label'=>$_tmp2),$_smarty_tpl);?>

    </form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.photoset.settings.title'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'uploader','template'=>'block','title'=>$_tmp3,'content'=>Smarty::$_smarty_vars['capture']['block_content'],'classes'=>'js-media-info-block','attributes'=>array('data-type'=>'photoset','data-filetype'=>'1')),$_smarty_tpl);?>
<?php }} ?>