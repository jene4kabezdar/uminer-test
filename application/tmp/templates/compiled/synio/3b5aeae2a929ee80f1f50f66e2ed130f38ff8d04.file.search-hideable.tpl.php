<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 10:49:27
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\search\hideable\search-hideable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1731606986493fd070fc093-30123802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b5aeae2a929ee80f1f50f66e2ed130f38ff8d04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\search\\hideable\\search-hideable.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1731606986493fd070fc093-30123802',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6493fd07110681_89224780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6493fd07110681_89224780')) {function content_6493fd07110681_89224780($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
?><div class="ls-search-hideable js-search-hideable">
    <div class="ls-search-hideable-toggle js-search-hideable-toggle">
        <i class="ls-search-hideable-toggle-icon"></i>
        <a href="#" class="ls-search-hideable-toggle-text"><?php echo smarty_function_lang(array('_default_short'=>'search.find'),$_smarty_tpl);?>
</a>
    </div>

    <?php echo smarty_function_component(array('_default_short'=>'search.main','classes'=>'ls-search-hideable-search js-search-hideable-search','mods'=>'light'),$_smarty_tpl);?>

</div><?php }} ?>