<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 11:02:11
         compiled from "C:\xampp\htdocs\framework\frontend\components\actionbar\actionbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18274594796494000345d282-42187305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd067e8355fadce77cb333f1114499e45a35cd882' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\actionbar\\actionbar.tpl',
      1 => 1687101138,
      2 => 'file',
    ),
    'b5bdaaa7a56b9c102d8b2c1096796a2e409e59fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\button\\toolbar.tpl',
      1 => 1687101138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18274594796494000345d282-42187305',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook' => 0,
    'params' => 0,
    'groups' => 0,
    'hookGroups' => 0,
    'mods' => 0,
    'component' => 0,
    'classes' => 0,
    'attributes' => 0,
    'group' => 0,
    'groupMod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6494000349e1d6_04691766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6494000349e1d6_04691766')) {function content_6494000349e1d6_04691766($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_hook')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-button-toolbar', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('groups','hook','mods','classes','attributes')),$_smarty_tpl);?>



<?php if ($_smarty_tpl->tpl_vars['hook']->value){?>
    <?php echo smarty_function_hook(array('run'=>$_smarty_tpl->tpl_vars['hook']->value,'assign'=>'hookGroups','params'=>$_smarty_tpl->tpl_vars['params']->value,'items'=>$_smarty_tpl->tpl_vars['groups']->value,'array'=>true),$_smarty_tpl);?>

    <?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['hookGroups']->value ? $_smarty_tpl->tpl_vars['hookGroups']->value : $_smarty_tpl->tpl_vars['groups']->value, null, 0);?>
<?php }?>


    <?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['items']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['classes']->value)." ls-actionbar", null, 0);?>



<?php if (in_array('vertical',explode(' ',$_smarty_tpl->tpl_vars['mods']->value))){?>
    <?php $_smarty_tpl->tpl_vars['groupMod'] = new Smarty_variable('vertical', null, 0);?>
<?php }?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 ls-clearfix" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
 role="toolbar">
    <?php if (is_array($_smarty_tpl->tpl_vars['groups']->value)){?>
        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
            <?php if (is_array($_smarty_tpl->tpl_vars['group']->value)){?>
                
    <?php echo smarty_function_component(array('_default_short'=>'actionbar','template'=>'group','params'=>$_smarty_tpl->tpl_vars['group']->value),$_smarty_tpl);?>


            <?php }else{ ?>
                <?php echo $_smarty_tpl->tpl_vars['group']->value;?>

            <?php }?>
        <?php } ?>
    <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['groups']->value;?>

    <?php }?>
</div><?php }} ?>