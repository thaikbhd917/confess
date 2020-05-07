<?php
class React implements JsonSerializable
{
    private $u_id;
    private $react_like;
    private $react_dislike;
    private $react_message_id;

    function __construct($u_id, $react_like, $react_dislike, $react_message_id)
    {
        $this->u_id = $u_id;
        $this->react_like = $react_like;
        $this->react_dislike = $react_dislike;
        $this->react_message_id = $react_message_id;
    }
    public function getUId()
    {
        return $this->u_id;
    }
    public function setUId($u_id)
    {
        $this->u_id = $u_id;
    }
    public function getReactLike()
    {
        return $this->react_like;
    }


    public function setReactLike($react_like)
    {
        $this->react_like = $react_like;

        return $this;
    }


    public function getReactDislike()
    {
        return $this->react_dislike;
    }


    public function setReactDislike($react_dislike)
    {
        $this->react_dislike = $react_dislike;

        return $this;
    }


    public function getReactMessageId()
    {
        return $this->react_message_id;
    }


    public function setReactMessageId($react_message_id)
    {
        $this->react_message_id = $react_message_id;

        return $this;
    }
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
