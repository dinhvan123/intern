<?php
/* Smarty version 3.1.32, created on 2020-11-15 10:58:19
  from 'D:\Download\xampp\htdocs\testmxh\content\themes\default\templates\_js_templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5fb109cbd16e46_92825284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca24ee536a175e664fc6f79108f56eb3f4f0f7a5' => 
    array (
      0 => 'D:\\Download\\xampp\\htdocs\\testmxh\\content\\themes\\default\\templates\\_js_templates.tpl',
      1 => 1536340052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_emoji-menu.tpl' => 4,
    'file:_chat-colors-menu.tpl' => 1,
    'file:__custom_fields.tpl' => 3,
  ),
),false)) {
function content_5fb109cbd16e46_92825284 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modals --><div id="modal" class="modal fade"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="loader pt10 pb10"></div></div></div></div></div><?php echo '<script'; ?>
 id="modal-login" type="text/template"><div class="modal-header"><h5 class="modal-title"><?php echo __("Not Logged In");?>
</h5></div><div class="modal-body"><p><?php echo __("Please log in to continue");?>
</p></div><div class="modal-footer"><a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin"><?php echo __("Login");?>
</a></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="modal-message" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h5 class="modal-title">{{title}}</h5></div><div class="modal-body"><p>{{message}}</p></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="modal-success" type="text/template"><div class="modal-body text-center"><div class="big-icon success"><i class="fa fa-thumbs-up fa-3x"></i></div><h4>{{title}}</h4><p class="mt20">{{message}}</p></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="modal-error" type="text/template"><div class="modal-body text-center"><div class="big-icon error"><i class="fa fa-times fa-3x"></i></div><h4>{{title}}</h4><p class="mt20">{{message}}</p></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="modal-confirm" type="text/template"><div class="modal-header"><h5 class="modal-title">{{title}}</h5></div><div class="modal-body"><p>{{message}}</p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button><button type="button" class="btn btn-primary" id="modal-confirm-ok"><?php echo __("Confirm");?>
</button></div><?php echo '</script'; ?>
><!-- Modals --><!-- Translator --><?php echo '<script'; ?>
 id="translator" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h5 class="modal-title"><?php echo __("Select Your Language");?>
</h5></div><div class="modal-body"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system']->value['languages'], 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?><li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;"><a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
<div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;"><img width="50" src="<?php echo $_smarty_tpl->tpl_vars['language']->value['flag'];?>
"></div></a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php echo '</script'; ?>
><!-- Translator --><!-- Search --><?php echo '<script'; ?>
 id="search-for" type="text/template"><div class="ptb10 plr10"><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/{{#hashtag}}hashtag/{{/hashtag}}{{query}}"><i class="fa fa-search pr5"></i> <?php echo __("Search for");?>
 {{#hashtag}}#{{/hashtag}}{{query}}</a></div><?php echo '</script'; ?>
><!-- Search --><!-- Lightbox --><?php echo '<script'; ?>
 id="lightbox" type="text/template"><div class="lightbox"><div class="container lightbox-container"><div class="lightbox-preview"><div class="lightbox-next js_lightbox-slider"><i class="fa fa-chevron-right fa-3x"></i></div><div class="lightbox-prev js_lightbox-slider"><i class="fa fa-chevron-left fa-3x"></i></div><img alt="" class="img-responsive" src="{{image}}"></div><div class="lightbox-data"><div class="clearfix"><div class="pt5 pr5 pull-right flip"><button data-toggle="tooltip" data-placement="bottom" title='<?php echo __("Press Esc to close");?>
' type="button" class="close lightbox-close js_lightbox-close"><span aria-hidden="true">&times;</span></button></div></div><div class="lightbox-post"><div class="js_scroller js_scroller-lightbox" data-slimScroll-height="100%"><div class="loader mtb10"></div></div></div></div></div></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="lightbox-nodata" type="text/template"><div class="lightbox"><div class="container lightbox-container"><div class="lightbox-preview nodata"><img alt="" class="img-responsive" src="{{image}}"></div></div></div><?php echo '</script'; ?>
><!-- Lightbox --><!-- Payments --><?php echo '<script'; ?>
 id="payment" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Select Your Payment Method");?>
</h5></div><div class="modal-body text-center"><?php if ($_smarty_tpl->tpl_vars['system']->value['paypal_enabled']) {?><button class="js_payment-paypal btn btn-default btn-lg mr10" data-handle="{{handle}}"{{#id}} data-id="{{id}}" {{/id}}{{#price}} data-price="{{price}}" {{/price}}{{#name}} data-name="{{name}}" {{/name}}{{#img}} data-img="{{img}}" {{/img}}data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> <?php echo __("Loading");?>
"><i class="fab fa-paypal"></i> <?php echo __("Paypal");?>
</button><?php }
if ($_smarty_tpl->tpl_vars['system']->value['creditcard_enabled']) {?><button class="js_payment-stripe btn btn-default btn-lg mr10" data-handle="{{handle}}"{{#id}} data-id="{{id}}" {{/id}}{{#price}} data-price="{{price}}" {{/price}}{{#name}} data-name="{{name}}" {{/name}}{{#img}} data-img="{{img}}" {{/img}}data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> <?php echo __("Loading");?>
" data-method="credit"><i class="fa fa-credit-card"></i> <?php echo __("Credit Card");?>
</button><?php }
if ($_smarty_tpl->tpl_vars['system']->value['alipay_enabled']) {?><button class="js_payment-stripe btn btn-default btn-lg mr10" data-handle="{{handle}}"{{#id}} data-id="{{id}}" {{/id}}{{#price}} data-price="{{price}}" {{/price}}{{#name}} data-name="{{name}}" {{/name}}{{#img}} data-img="{{img}}" {{/img}}data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> <?php echo __("Loading");?>
" data-method="alipay"><i class="fa fa-credit-card"></i> <?php echo __("Alipay");?>
</button><?php }?></div><?php echo '</script'; ?>
><!-- Payments --><?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?><!-- Forget Password --><?php echo '<script'; ?>
 id="forget-password-confirm" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h5 class="modal-title"><?php echo __("Check Your Email");?>
</h5></div><form class="js_ajax-forms" data-url="core/forget_password_confirm.php"><div class="modal-body"><div class="mb20"><?php echo __("Check your email");?>
 - <?php echo __("We sent you an email with a six-digit confirmation code. Enter it below to continue to reset your password");?>
.</div><div class="row"><div class="col-md-6"><div class="form-group"><input name="reset_key" type="text" class="form-control" placeholder="######" required autofocus></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="col-md-6"><label class="mb0"><?php echo __("We sent your code to");?>
</label> {{email}}</div></div></div><div class="modal-footer"><input name="email" type="hidden" value="{{email}}"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="forget-password-reset" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Change Your Password!");?>
</h5></div><form class="js_ajax-forms" data-url="core/forget_password_reset.php"><div class="modal-body"><div class="form-group"><label for="password"><?php echo __("New Password");?>
</label><input name="password" id="password" type="password" class="form-control" required autofocus></div><div class="form-group"><label for="confirm"><?php echo __("Confirm Password");?>
</label><input name="confirm" id="confirm" type="password" class="form-control" required></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><input name="email" type="hidden" value="{{email}}"><input name="reset_key" type="hidden" value="{{reset_key}}"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><!-- Forget Password --><?php } else { ?><!-- Email Activation --><?php echo '<script'; ?>
 id="activation-email-reset" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Change Email Address");?>
</h5></div><form class="js_ajax-forms" data-url="core/activation_email_reset.php"><div class="modal-body"><div class="form-group"><label><?php echo __("Current Email");?>
</label><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
</p></div><div class="form-group"><label for="email"><?php echo __("New Email");?>
</label><input name="email" id="email" type="email" class="form-control" required autofocus></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><!-- Email Activation --><!-- Phone Activation --><?php echo '<script'; ?>
 id="activation-phone" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Enter the code from the SMS message");?>
</h5></div><form class="js_ajax-forms" data-url="core/activation_phone_confirm.php"><div class="modal-body"><div class="mb20"><?php echo __("Let us know if this mobile number belongs to you. Enter the code in the SMS");?>
</div><div class="row"><div class="col-md-6"><div class="form-group"><input name="token" type="text" class="form-control" placeholder="######" required autofocus><?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_phone']) {?><span class="help-block"><span class="text-link" data-toggle="modal" data-url="core/activation_phone_resend.php"><?php echo __("Resend SMS");?>
</span></span><?php }?></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="col-md-6"><?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_phone']) {?><label class="mb0"><?php echo __("We sent your code to");?>
</label> <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_phone'];
}?></div></div></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="activation-phone-reset" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Change Phone Number");?>
</h5></div><form class="js_ajax-forms" data-url="core/activation_phone_reset.php"><div class="modal-body"><?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_phone']) {?><div class="form-group"><label><?php echo __("Current Phone");?>
</label><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_phone'];?>
</p></div><?php }?><div class="form-group"><label for="phone"><?php echo __("New Phone");?>
</label><input name="phone" id="phone" type="text" class="form-control" required autofocus><span class="help-block"><?php echo __("For example");?>
: +12344567890</span></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><!-- Phone Activation --><!-- x-uploader -->
    <?php echo '<script'; ?>
 id="x-uploader" type="text/template">
        <form class="x-uploader" action="{{url}}" method="post" enctype="multipart/form-data">
            {{#multiple}}
            <input name="file[]" type="file" multiple="multiple">
            {{/multiple}}
            {{^multiple}}
            <input name="file" type="file">
            {{/multiple}}
            <input type="hidden" name="secret" value="{{secret}}">
        </form>
    <?php echo '</script'; ?>
>
    <!-- x-uploader --><!-- Publisher --><?php echo '<script'; ?>
 id="publisher-attachments-item" type="text/template"><li class="item deletable" data-src="{{src}}"><img alt="" src="{{image_path}}"><button type="button" class="close js_publisher-attachment-remover" title='<?php echo __("Remove");?>
'><span>&times;</span></button></li><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="comment-attachments-item" type="text/template"><li class="item deletable" data-src="{{src}}"><img alt="" src="{{image_path}}"><button type="button" class="close js_comment-attachment-remover" title='<?php echo __("Remove");?>
'><span>&times;</span></button></li><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="chat-attachments-item" type="text/template"><li class="item deletable" data-src="{{src}}"><img alt="" src="{{image_path}}"><button type="button" class="close js_chat-attachment-remover" title='<?php echo __("Remove");?>
'><span>&times;</span></button></li><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="scraper-media" type="text/template"><div class="publisher-scraper-remover js_publisher-scraper-remover"><button type="button" class="close"><span>&times;</span></button></div><div class="post-media"><div class="embed-responsive embed-responsive-16by9">{{{html}}}</div><div class="post-media-meta"><a class="title mb5" href="{{url}}" target="_blank">{{title}}</a><div class="text mb5">{{text}}</div><div class="source">{{provider}}</div></div></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="scraper-photo" type="text/template"><div class="publisher-scraper-remover js_publisher-scraper-remover"><button type="button" class="close"><span>&times;</span></button></div><div class="post-media"><div class="post-media-image"><div style="background-image:url('{{url}}');"></div></div><div class="post-media-meta"><div class="source">{{provider}}</div></div></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="scraper-link" type="text/template"><div class="publisher-scraper-remover js_publisher-scraper-remover"><button type="button" class="close"><span>&times;</span></button></div><div class="post-media">{{#thumbnail}}<div class="post-media-image"><div style="background-image:url('{{thumbnail}}');"></div></div>{{/thumbnail}}<div class="post-media-meta"><a class="title mb5" href="{{url}}" target="_blank">{{title}}</a><div class="text mb5">{{text}}</div><div class="source">{{host}}</div></div></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="poll-option" type="text/template"><div class="publisher-meta" data-meta="poll"><i class="fa fa-plus fa-fw"></i><input type="text" placeholder='<?php echo __("Add an option");?>
...'></div><?php echo '</script'; ?>
><!-- Publisher --><!-- Edit (Posts|Comments) --><?php echo '<script'; ?>
 id="edit-post" type="text/template"><div class="post-edit"><div class="x-form comment-form"><textarea rows="2" class="js_autosize js_mention js_update-post">{{text}}</textarea><div class="x-form-tools"><div class="x-form-tools-emoji js_emoji-menu-toggle"><i class="fa fa-smile"></i></div><?php $_smarty_tpl->_subTemplateRender('file:_emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div></div><small class="text-link js_unedit-post"><?php echo __("Cancel");?>
</small></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="edit-comment" type="text/template"><div class="comment-edit"><div class="x-form comment-form"><textarea rows="1" class="js_autosize js_mention js_update-comment">{{text}}</textarea><div class="x-form-tools"><div class="x-form-tools-attach"><i class="fa fa-camera js_x-uploader" data-handle="comment"></i></div><div class="x-form-tools-emoji js_emoji-menu-toggle"><i class="fa fa-smile"></i></div><?php $_smarty_tpl->_subTemplateRender('file:_emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="comment-attachments attachments clearfix x-hidden"><ul><li class="loading"><div class="loader loader_small"></div></li></ul></div><small class="text-link js_unedit-comment"><?php echo __("Cancel");?>
</small></div><?php echo '</script'; ?>
><!-- Edit (Posts|Comments) --><!-- Hidden (Posts|Authors) --><?php echo '<script'; ?>
 id="hidden-post" type="text/template"><div class="post flagged" data-id="{{id}}"><div class="text-semibold mb5"><?php echo __("Post Hidden");?>
</div><?php echo __("This post will no longer appear to you");?>
 <span class="text-link js_unhide-post"><?php echo __("Undo");?>
</span></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="hidden-author" type="text/template"><div class="post flagged" data-id="{{id}}"><?php echo __("You won't see posts from");?>
 {{name}} <?php echo __("in News Feed anymore");?>
. <span class="text-link js_unhide-author" data-author-id="{{uid}}" data-author-name="{{name}}"><?php echo __("Undo");?>
</span></div><?php echo '</script'; ?>
><!-- Hidden (Posts|Authors) --><!-- Chat --><?php if ($_smarty_tpl->tpl_vars['system']->value['chat_enabled']) {?><!-- Desktop Chat Sidebar --><div class="chat-sidebar js_chat-widget-master <?php if (!$_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled']) {?>disabled<?php }?>"><div class="chat-sidebar-header"><div class="pull-right flip"><a class="js_chat-new mr5" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new"><i class="fa fa-edit"></i></a><i class="fa fa-cog" data-toggle="dropdown"></i><ul class="dropdown-menu"><li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/blocking"><?php echo __("Manage Blocking");?>
</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/privacy"><?php echo __("Privacy Settings");?>
</a></li><li class="divider"></li><li><?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled']) {?><a href="#" class="js_chat-toggle" data-status="on"><?php echo __("Turn Off Chat");?>
</a><?php } else { ?><a href="#" class="js_chat-toggle" data-status="off"><?php echo __("Turn On Chat");?>
</a><?php }?></li></ul></div><?php echo __("Chat");?>
 (<span class="js_chat-online-users"><?php echo $_smarty_tpl->tpl_vars['online_friends_count']->value;?>
</span>)</div><div class="chat-sidebar-content"><div class="js_scroller" data-slimScroll-height="100%"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['online_friends']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?><li class="feeds-item"><div class="data-container clickable small js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];?>
"><img class="data-avatar rounded" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
"><div class="data-content"><div class="pull-right flip"><i class="fa fa-circle online"></i></div><div><strong><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
</strong></div></div></div></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div><div class="chat-sidebar-footer"><input type="text" class="form-control js_chat-search" placeholder='<?php echo __("Search");?>
'></div></div><!-- Desktop Chat Sidebar --><!-- Mobile Chat Sidebar --><div class="chat-widget js_chat-widget-master"><?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled']) {?><div class="chat-widget-head"><div class="chat-head-title"><i class="fa fa-circle"></i><?php echo __("Chat");?>
 (<?php echo count($_smarty_tpl->tpl_vars['online_friends']->value);?>
)</div></div><div class="chat-widget-content"><div class="js_scroller"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['online_friends']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?><li class="feeds-item"><div class="data-container clickable small js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];?>
"><img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
"><div class="data-content"><div><strong><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
</strong></div></div></div></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><div class="x-form chat-form"><div class="chat-form-message"><input type="text" class="form-control" placeholder='<?php echo __("Search");?>
'></div></div></div><?php } else { ?><div class="chat-widget-content"><div class="js_scroller"></div></div><div class="chat-widget-head"><div class="chat-head-title"><i class="fa fa-user-secret"></i><?php echo __("Offline");?>
</div></div><?php }?></div><!-- Mobile Chat Sidebar --><?php }
echo '<script'; ?>
 id="chat-box-new" type="text/template"><div class="chat-widget chat-box opened fresh"><!-- head --><div class="chat-widget-head"><?php echo __("New Message");?>
<!-- buttons--><div class="pull-right flip"><i class="fa fa-times-circle js_chat-box-close"></i></div><!-- buttons--></div><!-- head --><!-- content --><div class="chat-widget-content"><div class="chat-conversations js_scroller"></div><div class="chat-to clearfix js_autocomplete-tags"><div class="to"><?php echo __("To");?>
:</div><ul class="tags"></ul><div class="typeahead"><input type="text" size="1" autofocus></div></div><div class="chat-attachments attachments clearfix x-hidden"><ul><li class="loading"><div class="loader loader_small"></div></li></ul></div><div class="x-form chat-form x-visible"><div class="chat-form-message"><textarea class="js_autosize js_post-message" dir="auto" rows="1" placeholder='<?php echo __("Write a message");?>
'></textarea></div><ul class="x-form-tools clearfix"><li class="x-form-tools-attach"><i class="fa fa-camera fa-fw js_x-uploader" data-handle="chat"></i></li><li class="x-form-tools-emoji js_emoji-menu-toggle"><i class="fa fa-smile fa-fw"></i></li><?php $_smarty_tpl->_subTemplateRender('file:_emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></ul></div></div><!-- content --></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="chat-box" type="text/template"><div class="chat-widget chat-box opened" id="{{chat_key_value}}"{{#user_id}}data-uid="{{user_id}}"{{/user_id}}{{#conversation_id}}data-cid="{{conversation_id}}"{{/conversation_id}}><!-- head --><div class="chat-widget-head js_chat-color-me">{{^multiple}}<i class="fa fa-user-secret mr5 js_chat-box-status"></i><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/{{link}}" title="{{name_list}}">{{name}}</a>{{/multiple}}{{#multiple}}<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/{{link}}" title="{{name_list}}">{{name}}</a>{{/multiple}}<!-- label --><div class="chat-head-label"><span class="label label-danger js_chat-box-label"></span></div><!-- label --><!-- buttons--><div class="pull-right flip"><i class="fa fa-times-circle js_chat-box-close"></i></div><!-- buttons--></div><!-- head --><!-- content --><div class="chat-widget-content"><div class="chat-conversations js_scroller"><ul></ul></div><div class="chat-attachments attachments clearfix x-hidden"><ul><li class="loading"><div class="loader loader_small"></div></li></ul></div><div class="x-form chat-form"><div class="chat-form-message"><textarea class="js_autosize js_post-message" dir="auto" rows="1" placeholder='<?php echo __("Write a message");?>
'></textarea></div><ul class="x-form-tools clearfix"><li class="x-form-tools-attach"><i class="fa fa-camera fa-fw js_x-uploader" data-handle="chat"></i></li><li class="x-form-tools-emoji js_emoji-menu-toggle"><i class="fa fa-smile fa-fw"></i></li><?php $_smarty_tpl->_subTemplateRender('file:_emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><li class="x-form-tools-colors js_chat-colors-menu-toggle js_chat-color-me {{#user_id}}x-hidden{{/user_id}}"><i class="fa fa-circle fa-fw"></i></li><?php $_smarty_tpl->_subTemplateRender('file:_chat-colors-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></ul></div></div><!-- content --></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="chat-message" type="text/template"><li><div class="conversation clearfix right" id="{{id}}"><div class="conversation-body"><div class="text js_chat-color-me" {{#color}}style="background-color: {{color}}"{{/color}}>{{{message}}}{{#image}}<span class="text-link js_lightbox-nodata {{#message}}mt5{{/message}}" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/{{image}}"><img alt="" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/{{image}}"></span>{{/image}}</div><div class="time js_moment" data-time="{{time}}">{{time}}</div></div></div></li><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="chat-voice-calling" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><i class="fa fa-phone-volume mr5"></i><?php echo __("Calling");?>
</h5></div><form class="js_ajax-forms" data-url="ads/wallet.php?do=wallet_transfer"><div class="modal-body"><?php echo __("Please wait for answer");?>
</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><!-- Chat --><!-- DayTime Messages --><?php echo '<script'; ?>
 id="message-morning" type="text/template"><div class="panel daytime_message"><button type="button" class="close pull-right flip js_daytime-remover"><span>&times;</span></button><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/good_morning.png"><strong><?php echo __("Good Morning");?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
</strong></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="message-afternoon" type="text/template"><div class="panel daytime_message"><button type="button" class="close pull-right flip js_daytime-remover"><span>&times;</span></button><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/good_afternoon.png"><strong><?php echo __("Good Afternoon");?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
</strong></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="message-evening" type="text/template"><div class="panel daytime_message"><button type="button" class="close pull-right flip js_daytime-remover"><span>&times;</span></button><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/good_night.png"><strong><?php echo __("Good Evening");?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
</strong></div><?php echo '</script'; ?>
><!-- DayTime Messages --><!-- Pages & Groups & Events --><?php echo '<script'; ?>
 id="create-page" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Create New Page");?>
</h5></div><form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=page&do=create"><div class="modal-body"><div class="form-group"><label for="title"><?php echo __("Name Your Page");?>
</label><input type="text" class="form-control" name="title" id="title"></div><div class="form-group"><label for="username"><?php echo __("Web Address");?>
</label><div class="input-group"><span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/</span><input type="text" class="form-control" name="username" id="username"></div></div><div class="form-group"><label for="category"><?php echo __("Category");?>
</label><select class="form-control" name="category" id="category"><option><?php echo __("Select Category");?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="form-group"><label for="description"><?php echo __("About");?>
</label><textarea class="form-control" name="description" name="description"></textarea></div><!-- custom fields --><?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {
$_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, false);
}?><!-- custom fields --><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="create-group" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Create New Group");?>
</h5></div><form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=group&do=create"><div class="modal-body"><div class="form-group"><label for="title"><?php echo __("Name Your Group");?>
</label><input type="text" class="form-control" name="title" id="title"></div><div class="form-group"><label for="username"><?php echo __("Web Address");?>
</label><div class="input-group"><span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/</span><input type="text" class="form-control" name="username" id="username"></div></div><div class="form-group"><label for="privacy"><?php echo __("Select Privacy");?>
</label><select class="form-control selectpicker" name="privacy"><option value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b><?php echo __("Public Group");?>
</b><br><?php echo __("Anyone can see the group, its members and their posts");?>
.</div></div>"><?php echo __("Public Group");?>
</option><option value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-2x'></i></div><div class='text'><b><?php echo __("Closed Group");?>
</b><br><?php echo __("Only members can see posts");?>
.</div></div>"><?php echo __("Closed Group");?>
</option><option value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b><?php echo __("Secret Group");?>
</b><br><?php echo __("Only members can find the group and see posts");?>
.</div></div>"><?php echo __("Secret Group");?>
</option></select></div><div class="form-group"><label for="category"><?php echo __("Category");?>
</label><select class="form-control" name="category" id="category"><option><?php echo __("Select Category");?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="form-group"><label for="description"><?php echo __("About");?>
</label><textarea class="form-control" name="description"></textarea></div><!-- custom fields --><?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {
$_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, true);
}?><!-- custom fields --><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="create-event" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Create New Event");?>
</h5></div><form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=event&do=create"><div class="modal-body"><div class="form-group"><label for="title"><?php echo __("Name Your Event");?>
</label><input type="text" class="form-control" name="title" id="title"></div><div class="form-group"><label for="location"><?php echo __("Location");?>
</label><input type="text" class="form-control js_geocomplete" name="location" id="location"></div><div class="form-group"><label><?php echo __("Start Date");?>
</label><div class='input-group date js_datetimepicker'><input type='text' class="form-control" name="start_date" /><span class="input-group-addon"><span class="fa fa-calendar"></span></span></div></div><div class="form-group"><label><?php echo __("End Date");?>
</label><div class='input-group date js_datetimepicker'><input type='text' class="form-control" name="end_date" /><span class="input-group-addon"><span class="fa fa-calendar"></span></span></div></div><div class="form-group"><label for="privacy"><?php echo __("Select Privacy");?>
</label><select class="form-control selectpicker" name="privacy"><option value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b><?php echo __("Public Event");?>
</b><br><?php echo __("Anyone can see the event, its users and posts");?>
.</div></div>"><?php echo __("Public Event");?>
</option><option value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-2x'></i></div><div class='text'><b><?php echo __("Closed Event");?>
</b><br><?php echo __("Only event users can see posts");?>
.</div></div>"><?php echo __("Closed Event");?>
</option><option value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b><?php echo __("Secret Event");?>
</b><br><?php echo __("Only invited users and event users can find the event");?>
.</div></div>"><?php echo __("Secret Event");?>
</option></select></div><div class="form-group"><label for="category"><?php echo __("Category");?>
</label><select class="form-control" name="category" id="category"><option><?php echo __("Select Category");?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="form-group"><label for="description"><?php echo __("About");?>
</label><textarea class="form-control" name="description"></textarea></div><!-- custom fields --><?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {
$_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, true);
}?><!-- custom fields --><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><!-- Pages & Groups & Events --><!-- Noty Notification --><?php echo '<script'; ?>
 id="noty-notification" type="text/template"><div class="data-container small"><img class="data-avatar" src="{{image}}"><div class="data-content">{{message}}</div></div><?php echo '</script'; ?>
><!-- Noty Notification --><!-- Wallet --><?php echo '<script'; ?>
 id="wallet-transfer" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><i class="fa fa-gift mr5"></i><?php echo __("Send Money");?>
</h5></div><form class="js_ajax-forms" data-url="ads/wallet.php?do=wallet_transfer"><div class="modal-body"><div class="form-group"><label><?php echo __("Amount");?>
</label><div class="input-money"><span><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span><input type="text" class="form-control" placeholder="0.00" min="1.00" max="1000" name="amount"></div></div><div class="form-group"><label for="send_to"><?php echo __("Send To");?>
</label><div class="relative js_autocomplete"><input type="text" class="form-control" placeholder="<?php echo __("Search for user name or email");?>
" name="send_to" id="send_to" autocomplete="off"><input type="hidden" name="send_to_id"></div></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Send");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="wallet-replenish" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><i class="fab fa-paypal mr5"></i><?php echo __("Replenish Credit");?>
</h5></div><form class="js_ajax-forms" data-url="ads/wallet.php?do=wallet_replenish"><div class="modal-body"><div class="form-group"><label for="amount"><?php echo __("Amount");?>
</label><div class="input-money"><span><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span><input type="text" class="form-control" placeholder="0.00" min="1.00" max="1000" name="amount"></div></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="wallet-withdraw-affiliate" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><i class="fa fa-exchange-alt mr5"></i><?php echo __("Withdraw Affiliates Credit");?>
</h5></div><form class="js_ajax-forms" data-url="ads/wallet.php?do=wallet_withdraw_affiliate"><div class="modal-body"><div class="form-group"><label for="amount"><?php echo __("Your Affiliates Credit");?>
</label><div class="text-lg"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_affiliate_balance'],2);?>
</div></div><div class="form-group"><label for="amount"><?php echo __("Amount");?>
</label><div class="input-money"><span><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span><input type="text" class="form-control" placeholder="0.00" min="1.00" max="1000" name="amount"></div></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><!-- Wallet --><!-- Crop Profile Picture --><?php echo '<script'; ?>
 id="crop-profile-picture" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><i class="fa fa-crop-alt mr5"></i><?php echo __("Crop Picture");?>
</h5></div><div class="modal-body text-center"><img id="cropped-profile-picture" src="{{image}}" style="max-width: 100%;"></div><div class="modal-footer"><button type="button" class="btn btn-primary js_crop-picture" data-handle="{{handle}}" data-id="{{id}}"><?php echo __("Save");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div><?php echo '</script'; ?>
><!-- Crop Profile Picture --><?php }
}
}
