<?php
/**
 * event
 * 
 *
 * @author Nhom3
 */

// fetch bootstrap
require('bootstrap.php');

// user access
if(!$system['system_public']) {
	user_access();
}

// check event id
if(is_empty($_GET['event_id'])) {
	_error(404);
}

try {

	// [1] get main event info
	$get_event = $db->query(sprintf("SELECT events.*, users.user_name, users.user_firstname, users.user_lastname FROM events INNER JOIN users ON events.event_admin = users.user_id WHERE events.event_id = %s", secure($_GET['event_id']) )) or _error(SQL_ERROR_THROWEN);
	if($get_event->num_rows == 0) {
		_error(404);
	}
	$event = $get_event->fetch_assoc();
	/* get the connection */
	$event['i_joined'] = $user->check_event_membership($user->_data['user_id'], $event['event_id']);
	$event['i_admin'] = ($event['event_admin'] == $user->_data['user_id'])? true : false;

	// [2] get view content
	/* check event privacy */
	if($event['event_privacy'] == "secret") {
		if(!$event['i_joined'] && !$event['i_admin']) {
			_error(404);
		}
	}
	if($event['event_privacy'] == "closed") {
		if(!$event['i_joined'] && !$event['i_admin']) {
			$_GET['view'] = 'about';
		}
			
	}
	switch ($_GET['view']) {
		case '':
			/* get custom fields */
			$smarty->assign('custom_fields', $user->get_custom_fields( array("for" => "event", "get" => "profile", "node_id" => $event['event_id']) ));

			/* get invites */
			$event['invites'] = $user->get_event_invites($event['event_id']);

			/* get photos */
			$event['photos'] = $user->get_photos($event['event_id'], 'event');

			/* get pinned post */
			$pinned_post = $user->get_post($event['event_pinned_post']);
			$smarty->assign('pinned_post', $pinned_post);

			/* prepare publisher */
			$smarty->assign('market_categories', $user->get_market_categories());
			$smarty->assign('feelings', get_feelings());
			$smarty->assign('feelings_types', get_feelings_types());

			/* get posts */
			$posts = $user->get_posts( array('get' => 'posts_event', 'id' => $event['event_id']) );
			/* assign variables */
			$smarty->assign('posts', $posts);
			break;

		case 'photos':
			/* get photos */
			$event['photos'] = $user->get_photos($event['event_id'], 'event');
			break;

		case 'albums':
			/* get albums */
			$event['albums'] = $user->get_albums($event['event_id'], 'event');
			break;

		case 'album':
			/* get album */
			$album = $user->get_album($_GET['id']);
			if(!$album || ($album['event_id'] != $event['event_id']) ) {
				_error(404);
			}
			/* assign variables */
			$smarty->assign('album', $album);
			break;

		case 'going':
			/* get going members */
			if($event['event_going'] > 0) {
				$event['members'] = $user->get_event_members($event['event_id'], 'going');
			}
			$event['total_members'] = $event['event_going'];
			break;

		case 'interested':
			/* get interested members */
			if($event['event_interested'] > 0) {
				$event['members'] = $user->get_event_members($event['event_id'], 'interested');
			}
			$event['total_members'] = $event['event_interested'];
			break;

		case 'invited':
			/* get invited members */
			if($event['event_invited'] > 0) {
				$event['members'] = $user->get_event_members($event['event_id'], 'invited');
			}
			$event['total_members'] = $event['event_invited'];
			break;

		case 'invites':
			/* check if the viewer is a event member */
			if(!$event['i_joined']) {
				_error(404);
			}
			/* get invites */
			$event['members'] = $user->get_event_invites($event['event_id']);
			$event['total_members'] = count($event['members']);
			break;

		case 'settings':
			/* check if the viewer is the admin */
			if($user->_data['user_id'] != $event['event_admin']) {
				_error(404);
			}

			/* get sub_view content */
			$sub_view = $_GET['id'];
			switch ($sub_view) {
				case '':
					/* get custom fields */
					$smarty->assign('custom_fields', $user->get_custom_fields( array("for" => "event", "get" => "settings", "node_id" => $event['event_id']) ));

					/* get events categories */
					$categories = $user->get_events_categories();
					/* assign variables */
					$smarty->assign('categories', $categories);
					break;

				case 'delete':
					break;
				
				default:
					_error(404);
					break;
			}
			/* assign variables */
			$smarty->assign('sub_view', $sub_view);

			break;

		case 'about':
			/* check if the viewer is a event member */
			if($event['i_joined']) {
				_error(404);
			}
			break;
		
		default:
			_error(404);
			break;
	}

	// recent rearches
	if(isset($_GET['ref']) && $_GET['ref'] == "qs") {
		$user->set_search_log($event['event_id'], 'event');
	}

} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page header
page_header($event['event_title'], $event['event_description']);

// assign variables
$smarty->assign('event', $event);
$smarty->assign('view', $_GET['view']);

// page footer
page_footer("event");

?>