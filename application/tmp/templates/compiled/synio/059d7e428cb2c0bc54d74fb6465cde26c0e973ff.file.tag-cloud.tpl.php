<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 10:49:23
         compiled from "C:\xampp\htdocs\framework\frontend\components\tags\tag-cloud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7948013696493fd03a81614-98874717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '059d7e428cb2c0bc54d74fb6465cde26c0e973ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\frontend\\components\\tags\\tag-cloud.tpl',
      1 => 1687101138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7948013696493fd03a81614-98874717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'component' => 0,
    'tag' => 0,
    'active' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6493fd03ac1494_91820896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6493fd03ac1494_91820896')) {function content_6493fd03ac1494_91820896($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-tag-cloud', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('tags','acitve')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['tags']->value){?>
    <ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 ls-word-wrap">
        <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
            <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item <?php if ($_smarty_tpl->tpl_vars['tag']->value->getText()&&$_smarty_tpl->tpl_vars['active']->value==$_smarty_tpl->tpl_vars['tag']->value->getText()){?>active<?php }?>">
                <a class="ls-tag-size-<?php echo $_smarty_tpl->tpl_vars['tag']->value->getSize();?>
" href="<?php echo $_smarty_tpl->tpl_vars['tag']->value->getUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['tag']->value->getCount();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value->getText(), ENT_QUOTES, 'UTF-8', true);?>
</a>
            </li>
        <?php } ?>
    </ul>
<?php }else{ ?>
    <?php echo smarty_function_component(array('_default_short'=>'blankslate','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['empty']),$_smarty_tpl);?>

<?php }?><?php }} ?>