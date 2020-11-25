<?php
/* Smarty version 3.1.32, created on 2020-11-15 11:18:57
  from 'D:\Download\xampp\htdocs\testmxh\content\themes\default\templates\directory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5fb10ea1024ed8_90141178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0c4c670e9ee24b7039fc188a688ef9caf8fbd67' => 
    array (
      0 => 'D:\\Download\\xampp\\htdocs\\testmxh\\content\\themes\\default\\templates\\directory.tpl',
      1 => 1530822178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_directory.tpl' => 1,
    'file:__feeds_post.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:__feeds_game.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5fb10ea1024ed8_90141178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:_directory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>

    <!-- page content -->
    <div class="container mt20 offcanvas">
        <div class="row">

            <!-- left panel -->
            <div class="col-sm-4 col-md-2 offcanvas-sidebar">
                <ul class="nav nav-pills nav-stacked nav-home mb20">
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "posts") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/posts"><i class="fa fa-newspaper fa-fw pr10"></i> <?php echo __("Posts");?>
</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/users"><i class="fa fa-user fa-fw pr10"></i> <?php echo __("Users");?>
</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "pages") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/pages"><i class="fa fa-flag fa-fw pr10"></i> <?php echo __("Pages");?>
</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/groups"><i class="fa fa-users fa-fw pr10"></i> <?php echo __("Groups");?>
</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "events") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/events"><i class="fa fa-calendar fa-fw pr10"></i> <?php echo __("Events");?>
</a>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "games") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/games"><i class="fa fa-gamepad fa-fw pr10"></i> <?php echo __("Games");?>
</a>
                        </li>
                    <?php }?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search"><i class="fa fa-search fa-fw pr10"></i> <?php echo __("Search");?>
</a>
                    </li>
                </ul>
            </div>
            <!-- left panel -->

            <div class="col-sm-8 col-md-10 offcanvas-mainbar">
                <div class="row">
                    <!-- center panel -->
                    <div class="col-sm-12 col-md-7">
                        <?php if ($_smarty_tpl->tpl_vars['view']->value == "posts") {?>
                            <?php if (count($_smarty_tpl->tpl_vars['rows']->value) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No posts to show");?>

                                </p>
                            <?php }?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "users") {?>
                            <?php if (count($_smarty_tpl->tpl_vars['rows']->value) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No users to show");?>

                                </p>
                            <?php }?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "pages") {?>
                            <?php if (count($_smarty_tpl->tpl_vars['rows']->value) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No pages to show");?>

                                </p>
                            <?php }?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>
                            <?php if (count($_smarty_tpl->tpl_vars['rows']->value) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No groups to show");?>

                                </p>
                            <?php }?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "events") {?>
                            <?php if (count($_smarty_tpl->tpl_vars['rows']->value) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No events to show");?>

                                </p>
                            <?php }?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "games") {?>
                            <?php if (count($_smarty_tpl->tpl_vars['rows']->value) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_game']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_game.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No games to show");?>

                                </p>
                            <?php }?>

                        <?php }?>
                    </div>
                    <!-- center panel -->

                    <!-- right panel -->
                    <div class="col-sm-12 col-md-5">
                        <?php $_smarty_tpl->_subTemplateRender('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    <!-- right panel -->
                </div>
            </div>

        </div>
    </div>
    <!-- page content -->

<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
