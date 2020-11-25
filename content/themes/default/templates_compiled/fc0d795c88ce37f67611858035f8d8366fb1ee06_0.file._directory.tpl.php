<?php
/* Smarty version 3.1.32, created on 2020-11-15 10:58:18
  from 'D:\Download\xampp\htdocs\testmxh\content\themes\default\templates\_directory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5fb109ca312379_53480213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc0d795c88ce37f67611858035f8d8366fb1ee06' => 
    array (
      0 => 'D:\\Download\\xampp\\htdocs\\testmxh\\content\\themes\\default\\templates\\_directory.tpl',
      1 => 1530822178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb109ca312379_53480213 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="directory-intro">
        <h2><?php echo __("Be Connected");?>
</h2>
        <p class="mt20">
            <?php echo __("Discover new people, create new connections and make new friends");?>

        </p>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/posts" class="panel-directory">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/newsfeed.png">
                <div class="title"><?php echo __("News Feed");?>
</div>
                <p>
                    <?php echo __("See what everyone’s up to and what’s on their minds");?>

                </p>
            </a>
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/users" class="panel-directory">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/users.png">
                <div class="title"><?php echo __("Users");?>
</div>
                <p>
                    <?php echo __("Help friends know you better and show them what you have in common");?>

                </p>
            </a>
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/pages" class="panel-directory">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/pages.png">
                <div class="title"><?php echo __("Pages");?>
</div>
                <p>
                    <?php echo __("Never miss a thing out! Keep in touch with your fans and customers");?>

                </p>
            </a>
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/groups" class="panel-directory">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/groups.png">
                <div class="title"><?php echo __("Groups");?>
</div>
                <p>
                    <?php echo __("Communicate and collaborate with the people who share your interests");?>

                </p>
            </a>
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/events" class="panel-directory">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/events.png">
                <div class="title"><?php echo __("Events");?>
</div>
                <p>
                    <?php echo __("Members can organize community events for online and offline doings");?>

                </p>
            </a>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>
            <div class="col-xs-12 col-sm-4">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums" class="panel-directory">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/forums.png">
                    <div class="title"><?php echo __("Forums");?>
</div>
                    <p>
                        <?php echo __("Members can hold conversations in the form of posted messages");?>

                    </p>
                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
            <div class="col-xs-12 col-sm-4">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/games" class="panel-directory">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/photos.png">
                    <div class="title"><?php echo __("Games");?>
</div>
                    <p>
                        <?php echo __("Playing games always fun, Play with the people who share your interests");?>

                    </p>
                </a>
            </div>
        <?php } else { ?>
            <div class="col-xs-12 col-sm-4">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search" class="panel-directory">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/search.png">
                    <div class="title"><?php echo __("Games");?>
</div>
                    <p>
                        <?php echo __("Discover new people, create new connections and make new friends");?>

                    </p>
                </a>
            </div>
        <?php }?>
    </div>
</div><?php }
}
