<?php

require "db_config.php"; //connect to db
require __DIR__ . "/../Message.php";
require __DIR__ . "/../Reply.php";
require __DIR__ . "/../React.php";

class ContentsDAO
{

    public function getMessageArray($offset)
    {
        settype($offset, 'integer'); // anti SQL injection

        global $conn;
        $MESSAGES = array(); // array chứa object message
        // property id message date
        $sql = "SELECT * FROM messages ORDER BY id DESC LIMIT 10 OFFSET $offset";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $message = new Message($row["id"], $row["message"], $row["date"]);
                $MESSAGES[] = $message;
            }
        }

        // add property react to message
        $sql = "SELECT  u_id,react_like,react_dislike,react_message_id from reacts right join messages on reacts.react_message_id= messages.id order by messages.id DESC LIMIT 10 OFFSET $offset";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            if ($row == NULL) {
                continue;
            }
            $react = new React($row["u_id"], $row["react_like"], $row["react_dislike"], $row["react_message_id"]);
            foreach ($MESSAGES as $key => $mess) {
                if ($mess->getId() == $react->getReactMessageId()) {
                    $mess->addReact($react);
                }
            }
        }

        //add property replies to message
        $sql = "SELECT replies.* FROM messages left join replies on messages.id=replies.reply_message_id ORDER BY messages.id DESC LIMIT 10 OFFSET $offset";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            if ($row == NULL) {
                continue;
            }
            $reply = new Reply($row["id"], $row["reply"], $row["reply_date"], $row["reply_message_id"]);
            foreach ($MESSAGES as $key => $mess) {
                if ($mess->getId() == $reply->getReplyMessageId()) {
                    $mess->addReplies($reply);
                }
            }
        }
        
        return $MESSAGES; // array object của model Message
    }
}

