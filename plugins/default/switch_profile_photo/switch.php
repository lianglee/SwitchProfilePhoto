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
 $photo = $params;
 if($photo->owner_guid == ossn_loggedin_user()->guid && $photo->guid != ossn_loggedin_user()->icon_guid){
?>
<a class="btn btn-sm btn-success right margin-top-10" href="<?php echo ossn_site_url("action/switch_profile_photo?guid={$photo->guid}", true);?>"><?php echo ossn_print("switchprofilephoto:makethis");?></a>
<?php
 }