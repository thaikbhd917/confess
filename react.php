<?php
require_once "utility/cookies.php";
require_once "model/DAO/React_DAO";

$message_id = $_REQUEST["message_id"]; //get request parameter
$type = $_REQUEST["type"];
if($type==1){
    $react= new React_DAO();
    $contents = $react->like($message_id);
}elseif ($type==0){
    $react= new React_DAO();
    $contents = $react->dislike($message_id);
}

// xu li view

?>