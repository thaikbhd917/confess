<?php
require_once __DIR__ . "/../index.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confession WEB</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="view/css/style.css">
    <script src="view/js/post.js"></script>
    <script src="view/js/react.js"></script>
    <script src="view/js/reply.js"></script>
    <script src="view/js/paging.js"></script>
    <script src="view/js/loadContents.js"></script>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
            document.getElementById("open-button").style.display = "none";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
            document.getElementById("open-button").style.display = "block";
        }
    </script>
</head>

<body>

    <header>
        <div class="row">
            <img src="view/img/vtilogo.png" height="200" class=" col-sm-3 d-none d-sm-block">
            <img src="view/img/vti1.png" height="200" class="col-sm-8">
        </div>
    </header>




    <div class="main row">
        <!--left logo-->
        <div class="col-sm-3 d-none d-sm-block">
            <img src="view/img/slogan.png" width="350">
        </div>


        <div class="confession-area col-sm-9" >
            <!--content 1-->
            <div class="contents" id="contents">

                <?php
                foreach ($contents as $content) {
                    $rep = "";
                    if($content->getReplies()==null){$rep='
                        <div class="reply collapse" id="showReply' . $content->getId() . '">
                                <p> Nothing </p>
                                </div>
                        ';}
                    foreach ($content->getReplies() as $reply) {
                        $rep = ' <div class="reply collapse" id="showReply' . $content->getId() . '">
                                <h4 class="media-heading">Reply #' . $reply->getId() . ' <small><i>Posted on ' . $reply->getReplyDate() . '</i></small></h4>
                                <p> ' . $reply->getReply() . '</p>
                                </div>
                                ';
                    }

                    echo '
                    <div class="content">
                    <div class="confe shadow p-4 mb-4 bg-white">
                        <h4 class="media-heading">Confession #' . $content->getId() . ' 
                        <small><i>Posted on ' . $content->getDate() . ', like ' . $content->countLike() . ' / dislike
                                    ' . $content->countDislike() . '</i></small>
                        </h4>
                        <p>' . $content->getMessage() . '</p>
                    </div>
                    <div class="button btn-group float-right">
                        <button type="button" class="btn btn-light" data-toggle="collapse" data-target="#showReply' . $content->getId() . '">Show
                        Reply
                        </button>
                        <button type="button" class="btn btn-light" data-toggle="collapse"
                        data-target="#input' . $content->getId() . '">Reply
                        </button>
                        <button type="button" class="btn btn-light">Like</button>
                        <button type="button" class="btn btn-light">Dislike</button>
                    </div>' 
                    . $rep . 
                    '
                    <div class="collapse reply" id="input' . $content->getId() . '">
                        <form action="reply.php" method=POST>
                            <textarea id="confess-text" placeholder=" Nhap noi dung " rows="7" name="reply"
                            required></textarea>

                            <input type="submit" class="btn btn-primary" value="Submit">
                            <input type="hidden" name="message_id" value="'. $content->getId() .'" />
                            <button class="btn btn-danger" data-toggle="collapse" data-target="#input'. $content->getId() .'">Cancel</button>
                        </form>
                        </div>
                        </div> ';
                }

                ?>





            </div>

        </div>


        <!--New confession button-->
        <button class="open-button" onclick="openForm()" id="open-button">New Confession</button>
        <div class="form-popup" id="myForm">
            <form action="" class="form-container"  id="confession-form" method="POST">
                <h4>New Confession</h4>


                <textarea id="confess-text" placeholder="Nhap noi dung" rows="7" name="message" required></textarea>

                <button type="submit" class="btn">Submit</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
            </form>
        </div>
</body>

</html>