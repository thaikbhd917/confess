<?php

require_once "model/DAO/Reply_DAO";

$message_id = $_REQUEST["message_id"]; //get request parameter
$reply = $_REQUEST["reply"];

$reply_dao = new Reply_DAO();
$contents = $reply_dao->reply($reply,$message_id);


// xu li view


