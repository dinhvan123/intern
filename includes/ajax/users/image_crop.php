<?php
/**
 * ajax -> users -> image crop
 * 
 *
 * @author Nhom3
 */

// fetch bootstrap
require('../../../bootstrap.php');

// fetch image class
require('../../class-image.php');

// check AJAX Request
is_ajax();

// user access
user_access(true);

// validate inputs
if(!isset($_POST['id']) || !is_numeric($_POST['id'])) {
	_error(403);
}
if(!isset($_POST['x']) || !is_numeric($_POST['x'])) {
	_error(403);
}
if(!isset($_POST['y']) || !is_numeric($_POST['y'])) {
	_error(403);
}
if(!isset($_POST['height']) || !is_numeric($_POST['height'])) {
	_error(403);
}
if(!isset($_POST['width']) || !is_numeric($_POST['width'])) {
	_error(403);
}

// crop (user|page|group) picture
try {

	switch ($_POST['handle']) {
		case 'user':
			/* get full picture */
			$get_picture = $db->query(sprintf("SELECT posts_photos.source FROM users INNER JOIN posts_photos ON users.user_picture_id = posts_photos.photo_id WHERE users.user_id = %s", secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			if($get_picture->num_rows == 0) {
				_error(403);
			}
			$picture = $get_picture->fetch_assoc();
            $full_picture = $picture['source'];
            /* prepare update query */
            $_POST['id'] = $user->_data['user_id'];
            $table_name = "users";
            $table_picture_field = "user_picture";
            $table_id_field = "user_id";
			break;

        case 'page':
            /* check the page & get full picture */
            $get_page = $db->query(sprintf("SELECT posts_photos.source FROM pages INNER JOIN posts_photos ON pages.page_picture_id = posts_photos.photo_id WHERE pages.page_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
            if($get_page->num_rows == 0) {
                _error(403);
            }
            $page = $get_page->fetch_assoc();
            /* check if the user is the page admin */
            if(!$user->check_page_adminship($user->_data['user_id'], $_POST['id'])) {
                _error(403);
            }
            $full_picture = $page['source'];
            /* prepare update query */
            $table_name = "pages";
            $table_picture_field = "page_picture";
            $table_id_field = "page_id";
            break;

        case 'group':
            /* check the group & get full picture */
            $get_group = $db->query(sprintf("SELECT posts_photos.source FROM groups INNER JOIN posts_photos ON groups.group_picture_id = posts_photos.photo_id WHERE groups.group_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
            if($get_group->num_rows == 0) {
                _error(403);
            }
            $group = $get_group->fetch_assoc();
            /* check if the user is the group admin */
            if(!$user->check_group_adminship($user->_data['user_id'], $_POST['id'])) {
                _error(403);
            }
            $full_picture = $group['source'];
            /* prepare update query */
            $table_name = "groups";
            $table_picture_field = "group_picture";
            $table_id_field = "group_id";
            break;

		default:
			_error(400);
			break;
	}

    // prepare uploads directory
    $folder = 'photos';
    $depth = '../../../';
    $directory = $folder.'/'. date('Y') . '/' . date('m') . '/';

    // init image & prepare image name & path
    $image = new Image($system['system_uploads'].'/'.$full_picture);
    $prefix = $system['uploads_prefix'].'_'.get_hash_token();
    $image_name = $directory.$prefix."_cropped".$image->_img_ext;
    $path = $depth.$system['uploads_directory'].'/'.$image_name;

    // crop image
    $image->crop($_POST['width'], $_POST['height'], $_POST['x'], $_POST['y']);

    // upload to
    /* local server */
    /* set uploads directory */
    if(!file_exists($depth.$system['uploads_directory'].'/'.$folder)) {
        @mkdir($depth.$system['uploads_directory'].'/'.$folder, 0777, true);
    }
    if(!file_exists($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y'))) {
        @mkdir($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y'), 0777, true);
    }
    if(!file_exists($system['uploads_directory'].'/'.$folder.'/' . date('Y') . '/' . date('m'))) {
        @mkdir($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y') . '/' . date('m'), 0777, true);
    }
    /* save the new image */
    $image->save($path, $system['uploads_quality']);
    /* Amazon S3 */
    if($system['s3_enabled']) {
        aws_s3_upload($path, $image_name);
    }

    // update picture
    $db->query(sprintf("UPDATE %s SET %s = %s WHERE %s = %s", $table_name, $table_picture_field, secure($image_name), $table_id_field, secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);

	// return & exit
    return_json();

} catch (Exception $e) {
	modal(ERROR, __("Error"), $e->getMessage());
}

?>