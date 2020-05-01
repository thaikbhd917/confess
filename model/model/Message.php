<?php 

Class Message{
	private $id;
	private $message;
	private $date;
    private $react=array();
    private $replies=array();




function __construct($id,$message,$date) {
    $this->id = $id;
    $this->message = $message;
    $this->date = $date;
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


    public function getMessage()
    {
        return $this->message;
    }


    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

 
    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }


    public function getReact()
    {
        return $this->react;
    }



    public function addReact($react)
    {
        $this->react[] = $react;

        return $this;
    }

    public function getReplies()
    {
        return $this->replies;
    }


    public function addReplies($replies)
    {
        $this->replies[] = $replies;

        return $this;
    }
}
