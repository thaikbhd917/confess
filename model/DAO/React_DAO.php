<?php
class React_DAO extends ContentsDAO{
    public function like($react_message_id) //like
    {
        global $conn;
        global $u_id;
        $sql = "INSERT INTO reacts(u_id,react_like,react_message_id) values(?,1,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss",$u_id,$react_message_id);
        $stmt->execute();
        return $this->getMessageArray(0); //reload data

    }
    public function disLike($react_message_id) //dislike
    {
        global $conn;
        global $u_id;
        $sql = "INSERT INTO reacts(u_id,react_dislike,react_message_id) values(?,1,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss",$u_id,$react_message_id);
        $stmt->execute();
        return $this->getMessageArray(0); // reload data

    }
}
?>
