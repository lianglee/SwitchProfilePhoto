<?php
/**
 * Open Source Social Network
 *
 * @package   (openteknik.com).ossn
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

ossn_register_callback('ossn', 'init', function(){
		ossn_extend_view('css/ossn.default', 'switch_profile_photo/css');
		if(ossn_isLoggedin()){
			ossn_register_action('switch_profile_photo',  ossn_route()->com . 'SwitchProfilePhoto/actions/switch.php');
			ossn_extend_view('photos/views/profilephoto/menu', 'switch_profile_photo/switch'); 
		}
});
