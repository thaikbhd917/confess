<?php 
	
class Reply{
	private $id;
	private $reply;
	private $reply_date;
	private $reply_message_id;

	function __construct($id,$reply,$reply_date,$reply_message_id) {
    $this->id = $id;
    $this->reply = $reply;
    $this->reply_date = $reply_date;
    $this->reply_message_id =$reply_message_id;
    
  }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getReply()
    {
        return $this->reply;
    }


    public function setReply($reply)
    {
        $this->reply = $reply;

        return $this;
    }

    public function getReplyDate()
    {
        return $this->reply_date;
    }

    public function setReplyDate($reply_date)
    {
        $this->reply_date = $reply_date;

        return $this;
    }


    public function getReplyMessageId()
    {
        return $this->reply_message_id;
    }


    public function setReplyMessageId($reply_message_id)
    {
        $this->reply_message_id = $reply_message_id;

        return $this;
    }
}

 ?>