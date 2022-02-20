<?php  
namespace controller\topic\edit;

use model\UserModel;

function get() {
    Auth::requireLogin();
 
    $topic = new TopicModel;
    $topic-> = get_param('topic_id', null, false);

    $user = UserModel::getSession();
    Auth::requirePermission($topic->id, $user);
}