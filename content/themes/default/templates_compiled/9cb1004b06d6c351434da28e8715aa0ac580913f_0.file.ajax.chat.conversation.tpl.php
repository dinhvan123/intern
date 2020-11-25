<?php
/* Smarty version 3.1.32, created on 2020-11-18 02:54:59
  from 'D:\Download\xampp\htdocs\testmxh\content\themes\default\templates\ajax.chat.conversation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5fb48d031deb50_16941338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cb1004b06d6c351434da28e8715aa0ac580913f' => 
    array (
      0 => 'D:\\Download\\xampp\\htdocs\\testmxh\\content\\themes\\default\\templates\\ajax.chat.conversation.tpl',
      1 => 1536033414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.chat.conversation.messages.tpl' => 1,
    'file:_emoji-menu.tpl' => 1,
    'file:_chat-colors-menu.tpl' => 1,
  ),
),false)) {
function content_5fb48d031deb50_16941338 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default panel-messages" data-cid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
" data-color="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['color'];?>
" >
    <div class="panel-heading clearfix">
        <div class="pull-right flip">
            <a class="btn btn-primary js_chat-new" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new">
                <i class="fa fa-comment"></i>
                <?php echo __("New Message");?>

            </a>
            <button type="button" class="btn btn-danger js_delete-conversation">
                <i class="fa fa-trash-alt"></i>
                <?php echo __("Delete");?>

            </button>
        </div>
        <div class="mt5">
            <?php if (!$_smarty_tpl->tpl_vars['conversation']->value['multiple_recipients']) {?>
                <?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_html'];?>

            <?php } else { ?>
                <span title="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_list'];?>
"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
</span>
            <?php }?>
        </div>
    </div>
    <div class="panel-body">
        <div class="chat-conversations js_scroller" data-slimScroll-height="367px" data-slimScroll-start="bottom">
            <?php $_smarty_tpl->_subTemplateRender('file:ajax.chat.conversation.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="chat-attachments attachments clearfix x-hidden">
            <ul>
                <li class="loading">
                    <div class="loader loader_small"></div>
                </li>
            </ul>
        </div>
        <div class="x-form chat-form">
            <div class="chat-form-message">
                <textarea class="js_autosize js_post-message" dir="auto" rows="1" placeholder='<?php echo __("Write a message");?>
'></textarea>
            </div>
            <ul class="x-form-tools clearfix">
                <li class="x-form-tools-attach">
                    <i class="fa fa-camera fa-fw js_x-uploader" data-handle="chat"></i>
                </li>
                <li class="x-form-tools-emoji js_emoji-menu-toggle">
                    <i class="fa fa-smile fa-fw"></i>
                </li>
                <?php $_smarty_tpl->_subTemplateRender('file:_emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <li class="x-form-tools-colors js_chat-colors-menu-toggle js_chat-color-me">
                    <i class="fa fa-circle fa-fw"></i>
                </li>
                <?php $_smarty_tpl->_subTemplateRender('file:_chat-colors-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <li class="x-form-tools-post js_post-message">
                    <i class="fa fa-paper-plane fa-fw"></i>
                </li>
            </ul>
        </div>
    </div>
</div><?php }
}
