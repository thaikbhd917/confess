<?php 
class React{
    private $id;
    private $react_like;
    private $react_dislike;
    private $react_message_id;

function __construct($id,$react_like,$react_dislike,$react_message_id) {
    $this->id = $id;
    $this->react_like = $react_like;
    $this->react_dislike = $react_dislike;
    $this->react_message_id =$react_message_id;

  }

    /**
     * @return mixed
     */
    public function getReactLike()
    {
        return $this->react_like;
    }

    /**
     * @param mixed $react_like
     *
     * @return self
     */
    public function setReactLike($react_like)
    {
        $this->react_like = $react_like;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReactDislike()
    {
        return $this->react_dislike;
    }

    /**
     * @param mixed $react_dislike
     *
     * @return self
     */
    public function setReactDislike($react_dislike)
    {
        $this->react_dislike = $react_dislike;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReactMessageId()
    {
        return $this->react_message_id;
    }

    /**
     * @param mixed $react_message_id
     *
     * @return self
     */
    public function setReactMessageId($react_message_id)
    {
        $this->react_message_id = $react_message_id;

        return $this;
    }
}


 ?>