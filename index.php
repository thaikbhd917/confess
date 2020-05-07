<?php
require_once "model/DAO/ContentsDAO.php";
require_once "utility/cookies.php";


$contents_dao = new ContentsDAO();
$contents = $contents_dao->getMessageArray(0);

?>

<!DOCTYPE html>
<html>

<head>
  <title>VTI Confession</title>
</head>

<body>

  confession page contents<br>
<?php


foreach($contents as $content){
  $react = $content->getReact();
  foreach($react as $value){
    if($value->getUId()==2 && $value->getReactMessageId()==12){echo "you already liked";} // test disable like function
  }

  }


?>

</body>

</html>