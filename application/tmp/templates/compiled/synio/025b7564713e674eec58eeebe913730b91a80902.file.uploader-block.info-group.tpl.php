<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 11:02:31
         compiled from "C:\xampp\htdocs\framework\frontend\components\uploader\uploader-block.info-group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17670627706494001758b6d6-33573230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '025b7564713e674eec58eeebe913730b91a80902' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\uploader\\uploader-block.info-group.tpl',
      1 => 1687101138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17670627706494001758b6d6-33573230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component_info' => 0,
    'type' => 0,
    'properties' => 0,
    'property' => 0,
    'propertiesFields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_649400175b90b3_75259776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_649400175b90b3_75259776')) {function content_649400175b90b3_75259776($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component_info'] = new Smarty_variable('ls-uploader-info', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('properties','propertiesFields','type')),$_smarty_tpl);?>


<div class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-group js-uploader-info-group" data-type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
    
    <ul class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-actions">
        <li><a href="#" class="ls-link-dotted js-uploader-info-remove"><?php echo smarty_function_lang(array('name'=>'uploader.actions.remove'),$_smarty_tpl);?>
</a></li>
    </ul>

    
    <div class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-properties">
        
        <ul class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-list">
            <?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value){
$_smarty_tpl->tpl_vars['property']->_loop = true;
?>
                <li class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-list-item">
                    <span class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-list-item-label"><?php echo $_smarty_tpl->tpl_vars['property']->value['label'];?>
:</span>
                    <span class="js-uploader-info-property" data-name="<?php echo $_smarty_tpl->tpl_vars['property']->value['name'];?>
"></span>
                </li>
            <?php } ?>
        </ul>

        
        <div class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-fields">
            <?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['propertiesFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value){
$_smarty_tpl->tpl_vars['property']->_loop = true;
?>
                <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>$_smarty_tpl->tpl_vars['property']->value['name'],'inputClasses'=>"js-uploader-info-property",'inputAttributes'=>array('data-name'=>$_smarty_tpl->tpl_vars['property']->value['name']),'label'=>$_smarty_tpl->tpl_vars['property']->value['label']),$_smarty_tpl);?>

            <?php } ?>
        </div>
    </div>
</div><?php }} ?>