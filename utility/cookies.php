<?php

session_start();
if (empty($_SESSION["u_id"])) {
    $_SESSION["u_id"] = bin2hex(random_bytes(32));
}

$u_id = $_SESSION["u_id"];

?>