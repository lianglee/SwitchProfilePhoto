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
 $guid = input('guid');
 $photo   = new OssnPhotos();
 $photo  = $photo->GetPhoto($guid);
 
 if($photo && $photo->owner_guid == ossn_loggedin_user()->guid){
		$user = ossn_loggedin_user();
		$user->data->icon_time = time();
		$user->data->icon_guid = $photo->guid;
		if($user->save()){
				//add wall post
				$profile = new OssnProfile();
				$profile->addPhotoWallPost($photo->owner_guid, $photo->guid);
				
				redirect("u/{$user->username}");	
		}
 }
 redirect(REF);