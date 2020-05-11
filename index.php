<?php
require_once "model/DAO/ContentsDAO.php";
require_once "utility/cookies.php";


$contents_dao = new ContentsDAO();
$contents = $contents_dao->getMessageArray(0);
require_once "view/home.php"

?>
