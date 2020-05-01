<?php 
    class MessageDAO extends ContentsDAO{
    public function postMessage($message) // post Confession
    {
        if($message==null){die("error code VTI001: 内容を入力されていない");} // $message empty
        global $conn;
        $sql = "INSERT INTO messages(message) VALUES(?)";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("s",$message);
        $stmt->execute();

        return $this->getMessageArray(0); // return data reload trang

    }

}
?>