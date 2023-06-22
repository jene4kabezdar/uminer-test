<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 10:49:22
         compiled from "C:\xampp\htdocs\framework\frontend\components\tabs\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2753571436493fd02bc8927-56644332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1500a7e469c2b7c893e24eb3c629ce12346f7c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\tabs\\list.tpl',
      1 => 1687101138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2753571436493fd02bc8927-56644332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'activeTab' => 0,
    'tabs' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6493fd02bf5e81_10981519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6493fd02bf5e81_10981519')) {function content_6493fd02bf5e81_10981519($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?><?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-tab-list', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('activeTab','tabs','mods','classes','attributes')),$_smarty_tpl);?>


<ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 ls-clearfix" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
 data-tab-list>
    <?php if (!$_smarty_tpl->tpl_vars['activeTab']->value&&$_smarty_tpl->tpl_vars['tabs']->value){?>
        <?php $_smarty_tpl->createLocalArrayVariable('tabs', null, 0);
$_smarty_tpl->tpl_vars['tabs']->value[0]['isActive'] = true;?>
    <?php }?>

    <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['tab']->value['is_enabled'])===null||$tmp==='' ? true : $tmp)){?>
            <?php echo smarty_function_component(array('_default_short'=>'tabs.tab','isActive'=>($_smarty_tpl->tpl_vars['tab']->value['isActive']||($_smarty_tpl->tpl_vars['activeTab']->value&&$_smarty_tpl->tpl_vars['tab']->value['name']==$_smarty_tpl->tpl_vars['activeTab']->value)),'params'=>$_smarty_tpl->tpl_vars['tab']->value),$_smarty_tpl);?>

        <?php }?>
    <?php } ?>
</ul><?php }} ?>