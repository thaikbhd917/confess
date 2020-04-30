<?php 

Class Message{
	private $id;
	private $message;
	private $date;
    private $react;
    private $replies=array();

function __construct($id,$message,$date) {
    $this->id = $id;
    $this->message = $message;
    $this->date = $date;
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
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of react
     */ 
    public function getReact()
    {
        return $this->react;
    }

    /**
     * Set the value of react
     *
     * @return  self
     */ 
    public function setReact($react)
    {
        $this->react = $react;

        return $this;
    }

    /**
     * Get the value of replies
     */ 
    public function getReplies()
    {
        return $this->replies;
    }

    /**
     * Set the value of replies
     *
     * @return  self
     */ 
    public function addReplies($replies)
    {
        $this->replies[] = $replies;

        return $this;
    }
}
