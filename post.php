<?php
require_once "model/DAO/Message_DAO";

$message = $_REQUEST["message"]; //get request parameter
$message_dao = new Message_DAO();
$contents=$message_dao->postMessage($message);// reloaded contents

// xu li view

?>