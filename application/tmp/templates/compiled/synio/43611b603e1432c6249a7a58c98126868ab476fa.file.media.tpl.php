<?php /* Smarty version Smarty-3.1.13, created on 2023-06-22 11:02:29
         compiled from "C:\xampp\htdocs\application\frontend\skin\synio\components\media\media.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152904926364940015343745-89212100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43611b603e1432c6249a7a58c98126868ab476fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\media\\media.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
    '70803c82e71d5dd381160e433655b8dd02eaa70f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\frontend\\skin\\synio\\components\\modal\\modal.tpl',
      1 => 1687101136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152904926364940015343745-89212100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showFooter' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'id' => 0,
    'options' => 0,
    'title' => 0,
    'tabs' => 0,
    'body' => 0,
    'content' => 0,
    'primaryButton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_649400153a0147_53516417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_649400153a0147_53516417')) {function content_649400153a0147_53516417($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_cmods')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'C:\\xampp\\htdocs\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-modal', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('title','content','tabs','body','id','options','showFooter','primaryButton','mods','classes','attributes')),$_smarty_tpl);?>



<?php $_smarty_tpl->tpl_vars['showFooter'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['showFooter']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>


    <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['classes']->value)." js-modal-media", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." media", null, 0);?>
    <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_tmp1, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['options'] = new Smarty_variable(array_merge((($tmp = @$_smarty_tpl->tpl_vars['options']->value)===null||$tmp==='' ? array() : $tmp),array('center'=>'false')), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['showFooter'] = new Smarty_variable(false, null, 0);?>
    <?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'media','template'=>'content'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['content'] = new Smarty_variable($_tmp2, null, 0);?>



<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>

    id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
    data-type="modal"
    <?php echo smarty_function_cattr(array('prefix'=>'data-lsmodal-','list'=>$_smarty_tpl->tpl_vars['options']->value),$_smarty_tpl);?>
>

    
    
        <header class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-header">
            
            <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
                <h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
            <?php }?>

            
            <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-close" data-type="modal-close">
                <?php echo smarty_function_component(array('_default_short'=>'syn-icon','icon'=>'close'),$_smarty_tpl);?>

            </div>
        </header>
    

    

    
    
        <?php if (!$_smarty_tpl->tpl_vars['tabs']->value&&!$_smarty_tpl->tpl_vars['body']->value){?>
            <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-body">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        <?php }?>
    

    
    <?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'tabs','classes'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-tabs js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-tabs",'params'=>$_smarty_tpl->tpl_vars['tabs']->value),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo is_array($_smarty_tpl->tpl_vars['tabs']->value) ? $_tmp1 : $_smarty_tpl->tpl_vars['tabs']->value;?>


    <?php echo $_smarty_tpl->tpl_vars['body']->value;?>


    
    
        <?php if ($_smarty_tpl->tpl_vars['showFooter']->value){?>
            <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-footer">
                
                    
                    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'common.cancel'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','type'=>'button','text'=>$_tmp2,'attributes'=>array('data-type'=>'modal-close')),$_smarty_tpl);?>


                    
                    <?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'primary','params'=>$_smarty_tpl->tpl_vars['primaryButton']->value),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo is_array($_smarty_tpl->tpl_vars['primaryButton']->value) ? $_tmp3 : $_smarty_tpl->tpl_vars['primaryButton']->value;?>

                
            </div>
        <?php }?>
    
</div><?php }} ?>