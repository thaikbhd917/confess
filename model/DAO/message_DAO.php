<?php 
  
    require_once "ContentsDAO.php";

    class Message_DAO extends ContentsDAO{
    public function __construct()
    {
        
    }
    public function postMessage($message) // post Confession
    {
        if($message==null){die("error code VTI001: 内容を入力されていない");} // $message empty
        $conn=getConnection();
        $sql = "INSERT INTO messages(message) VALUES(?)";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("s",$message);
        $stmt->execute();
        $conn->close();
        return $this->getMessageArray(0); // return data reload trang

    }

}
