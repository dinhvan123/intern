<?php
/**
 * ajax -> core -> activation phone reset
 * 
 *
 * @author Nhom3
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check user logged in
if(!$user->_logged_in) {
	modal(LOGIN);
}

// check user activated
if(!$system['activation_enabled'] || $user->_data['user_activated']) {
	modal(SUCCESS, __("Activated"), __("Your account already activated!"));
}

// check activation type
if($system['activation_type'] != "sms") {
	_error(400);
}

// activation phone reset
try {
	$user->activation_phone_reset($_POST['phone']);
	if($user->_data['user_phone']) {
		modal(SUCCESS, __("Your phone has been changed"), __("Please check your phone and copy the activation code to activate your account"));
	} else {
		return_json( array('callback' => 'window.location.reload();') );
	}
} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>