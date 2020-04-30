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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * @param mixed $reply
     *
     * @return self
     */
    public function setReply($reply)
    {
        $this->reply = $reply;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReplyDate()
    {
        return $this->reply_date;
    }

    /**
     * @param mixed $reply_date
     *
     * @return self
     */
    public function setReplyDate($reply_date)
    {
        $this->reply_date = $reply_date;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReplyMessageId()
    {
        return $this->reply_message_id;
    }

    /**
     * @param mixed $reply_message_id
     *
     * @return self
     */
    public function setReplyMessageId($reply_message_id)
    {
        $this->reply_message_id = $reply_message_id;

        return $this;
    }
}

 ?>