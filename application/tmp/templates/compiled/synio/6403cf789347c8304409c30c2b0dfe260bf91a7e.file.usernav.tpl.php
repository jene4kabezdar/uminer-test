<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 11:01:37
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\userbar\usernav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10450327166493ffe1488e77-20531525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6403cf789347c8304409c30c2b0dfe260bf91a7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\userbar\\usernav.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10450327166493ffe1488e77-20531525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6493ffe1513830_56749440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6493ffe1513830_56749440')) {function content_6493ffe1513830_56749440($_smarty_tpl) {?><?php if (!is_callable('smarty_insert_block')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\insert.block.php';
?>
<div class="ls-userbar-user-nav js-userbar-user-nav">
    <a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileAvatarPath(48);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getDisplayName();?>
"" class="ls-userbar-user-nav-avatar" />
    </a>

    <a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
" class="ls-userbar-user-nav-username">
        <?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getDisplayName();?>

    </a>

    <div class="ls-userbar-user-nav-toggle js-userbar-user-nav-toggle"></div>

    <?php echo smarty_insert_block(array('block' => 'menu', 'params' => array('name'=>"user")),$_smarty_tpl);?>

    
</div><?php }} ?>