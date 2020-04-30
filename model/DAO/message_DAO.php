<?php

require "db_config.php"; //connect to db
require __DIR__ . "/../Message.php";
require __DIR__ . "/../Reply.php";
require __DIR__ . "/../React.php";



$MESSAGES = array(); // array of message instance

$sql = "SELECT * FROM messages ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $message = new Message($row["id"], $row["message"], $row["date"]);
        $MESSAGES[] = $message;
    }
}


$sql = "SELECT reacts.id,reacts.react_like, reacts.react_dislike,reacts.react_message_id FROM messages left join reacts on messages.id=reacts.react_message_id ORDER BY messages.id DESC LIMIT 10";
$result = $conn->query($sql);


while ($row = $result->fetch_assoc()) {
    if ($row == NULL) {
        continue;
    }

    $react = new React($row["id"], $row["react_like"], $row["react_dislike"], $row["react_message_id"]);
    foreach ($MESSAGES as $key => $mess) {
        if ($mess->getId() == $react->getReactMessageId()) {
            $mess->setReact($react);
        }
    }
}

$sql = "SELECT replies.* FROM messages left join replies on messages.id=replies.reply_message_id ORDER BY messages.id DESC LIMIT 10";
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

$conn->close();
