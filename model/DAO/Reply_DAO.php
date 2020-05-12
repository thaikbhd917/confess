<?php
require_once "ContentsDAO.php";

class Reply_DAO extends ContentsDAO{
    public function reply($reply,$reply_message_id){
        $conn =getConnection();
        $sql = "INSERT INTO replies(reply,reply_message_id) values(?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss",$reply,$reply_message_id);
        $stmt->execute();
        return $this->getMessageArray(0);
    }
}

?>