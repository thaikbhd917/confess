<?php
require "model/DAO/ContentsDAO.php";


?>

<!DOCTYPE html>
<html>

<head>
  <title>VTI Confession</title>
</head>

<body>

  confession page contents
  <?php
  $contents = new ContentsDAO();
  $MESSAGES= $contents->getMessageArray(1);
  foreach ($MESSAGES as $key => $mess) {
    echo "[message section]";
    echo $mess->getMessage();
    echo "[reply section]";
    $replies = $mess->getReplies();

    if ($replies) {
      echo $replies[1]->getReply();
      echo "[another reply]";
      echo $replies[0]->getReply();
    }
    echo "<br>";
  }

  ?>
</body>

</html>