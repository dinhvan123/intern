<?php
/* Smarty version 3.1.32, created on 2020-11-15 11:51:27
  from 'D:\Download\xampp\htdocs\testmxh\content\themes\default\templates\ajax.chat.conversation.messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5fb1163f9821b2_82364551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e78831e1af8d27f77a837001911a44f0894e1e96' => 
    array (
      0 => 'D:\\Download\\xampp\\htdocs\\testmxh\\content\\themes\\default\\templates\\ajax.chat.conversation.messages.tpl',
      1 => 1536326510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.chat.messages.tpl' => 1,
  ),
),false)) {
function content_5fb1163f9821b2_82364551 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['conversation']->value['total_messages'] >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
<!-- see-more -->
<div class="alert alert-chat see-more small js_see-more" data-id=<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
  data-get="messages">
    <span><?php echo __("Loading Older Messages");?>
</span>
    <div class="loader loader_small x-hidden"></div>
</div>
<!-- see-more -->
<?php }?>

<ul>
    <?php $_smarty_tpl->_subTemplateRender('file:ajax.chat.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('messages'=>$_smarty_tpl->tpl_vars['conversation']->value['messages']), 0, false);
?>
</ul><?php }
}
