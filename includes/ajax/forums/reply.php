<?php
/**
 * ajax -> forums -> reply
 * 
 *
 * @author Nhom3
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true);

// (create|edit) reply
try {

	// initialize the return array
	$return = array();
	$return['callback'] = 'window.location.replace(response.path);';

	switch ($_GET['do']) {
		case 'create':
			/* check id */
			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
				_error(400);
			}
			/* create reply */
			$reply = $user->post_forum_reply($_GET['id'], $_POST['text']);
			$return['path'] = $system['system_url'].'/forums/thread/'.$reply['thread']['thread_id'].'/'.$reply['thread']['title_url']."#reply-".$reply['reply_id'];
			break;

		case 'edit':
			/* check id */
			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
				_error(400);
			}
			/* edit reply */
			$reply = $user->edit_forum_reply($_GET['id'], $_POST['text']);
			$return['path'] = $system['system_url'].'/forums/thread/'.$reply['thread']['thread_id'].'/'.$reply['thread']['title_url']."#reply-".$reply['reply_id'];
			break;
		
		default:
			_error(400);
			break;
	}

	// return & exit
	return_json($return);
	
} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>