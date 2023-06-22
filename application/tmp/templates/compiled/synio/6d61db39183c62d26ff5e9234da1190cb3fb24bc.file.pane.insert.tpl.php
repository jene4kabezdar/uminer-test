<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 11:02:29
         compiled from "C:\xampp\htdocs\application\frontend\components\media\panes\pane.insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12764606664940015ea0352-99079586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d61db39183c62d26ff5e9234da1190cb3fb24bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\media\\panes\\pane.insert.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
    'a61d94d49dc8882b4c41bdf651bc760e4d64be7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\components\\media\\panes\\pane.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12764606664940015ea0352-99079586',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_64940015ec43b5_92926625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64940015ec43b5_92926625')) {function content_64940015ec43b5_92926625($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
?>
    <?php echo smarty_function_component_define_params(array('params'=>array('id')),$_smarty_tpl);?>


    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('tab-media-insert', null, 0);?>


<div class="ls-media-pane-content js-media-pane-content">
    
    <?php echo smarty_function_component(array('_default_short'=>'media','template'=>'uploader','attributes'=>array('id'=>'media-uploader'),'classes'=>'js-media-uploader','targetParams'=>$_smarty_tpl->tpl_vars['aTargetParams']->value,'targetType'=>$_smarty_tpl->tpl_vars['sMediaTargetType']->value,'targetId'=>$_smarty_tpl->tpl_vars['sMediaTargetId']->value,'targetTmp'=>$_smarty_tpl->tpl_vars['sMediaTargetTmp']->value),$_smarty_tpl);?>


</div>

<div class="ls-media-pane-footer">
    
    <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.insert.submit'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'primary','classes'=>'js-media-insert-submit','text'=>$_tmp1),$_smarty_tpl);?>


</div><?php }} ?>