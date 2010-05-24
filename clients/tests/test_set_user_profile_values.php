<?php
require_once ('../MoodleWS.php');

$moodle=new MoodleWS();
require_once ('../auth.php');
/**test code for MoodleWS: set one user profile values
* @param integer $client
* @param string $sesskey
* @param string $userid
* @param string $useridfield
* @param (profileitemRecords) array of profileitemRecord $values
* @return profileitemRecords
*/

$lr=$moodle->login(LOGIN,PASSWORD);
$values=array();
$res=$moodle->set_user_profile_values($lr->getClient(),$lr->getSessionKey(),'','',$values);
print_r($res);
$moodle->logout($lr->getClient(),$lr->getSessionKey());

?>
