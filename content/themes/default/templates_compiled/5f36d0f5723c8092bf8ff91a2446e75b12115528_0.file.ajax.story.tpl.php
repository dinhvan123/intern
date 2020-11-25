<?php
/* Smarty version 3.1.32, created on 2020-11-18 07:41:26
  from 'D:\Download\xampp\htdocs\testmxh\content\themes\default\templates\ajax.story.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5fb4d026d1f826_44909564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f36d0f5723c8092bf8ff91a2446e75b12115528' => 
    array (
      0 => 'D:\\Download\\xampp\\htdocs\\testmxh\\content\\themes\\default\\templates\\ajax.story.tpl',
      1 => 1530822178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb4d026d1f826_44909564 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body plr0 ptb0">
    <div class="x-form publisher mini">

        <!-- publisher close -->
        <button type="button" class="close mr10 pull-right flip" data-dismiss="modal" aria-hidden="true">×</button>
        <!-- publisher close -->

        <!-- publisher tabs -->
        <ul class="publisher-tabs clearfix">
            <li>
                <span class="active">
                    <i class="fa fa-file-image fa-fw"></i> <?php echo __("Create a Story");?>

                </span>
            </li>
        </ul>
        <!-- publisher tabs -->

        <!-- post message -->
        <div class="relative">
            <textarea dir="auto" class="js_mention" placeholder='<?php echo __("What is on your mind?");?>
'></textarea>
        </div>
        <!-- post message -->

        <!-- post attachments -->
        <div class="publisher-attachments attachments clearfix x-hidden">
            <ul></ul>
        </div>
        <!-- post attachments -->

        <!-- publisher-footer -->
        <div class="publisher-footer clearfix">
            <!-- publisher-tools -->
            <ul class="publisher-tools">
                <?php if ($_smarty_tpl->tpl_vars['system']->value['photos_enabled']) {?>
                    <li data-toggle="tooltip" data-placement="top" title='<?php echo __("Add Photos");?>
'>
                        <span class="publisher-tools-attach js_publisher-photos">
                            <i class="fa fa-camera fa-fw js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
                        </span>
                    </li>
                <?php }?>
            </ul>
            <!-- publisher-tools -->

            <!-- publisher-buttons -->
            <div class="pull-right flip mt5 mr10">
                <button type="button" class="btn btn-primary js_story-publish"><?php echo __("Publish Story");?>
</button>
            </div>
            <!-- publisher-buttons -->
        </div>
        <!-- publisher-footer -->
    </div>
</div><?php }
}
