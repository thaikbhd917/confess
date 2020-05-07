<?php
require_once "model/DAO/ContentsDAO";

$offset = $_REQUEST["offset"];//get request parameter
$contents_dao = new ContentsDAO();
$contents=$contents_dao->getMessageArray($offset);// reloaded contents

// xu li view

?>