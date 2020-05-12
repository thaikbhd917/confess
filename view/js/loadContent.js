function loadContent(contents){



   
  
       <h4 class="media-heading">Confession #' . $content->getId() . ' 
       <small><i>Posted on ' . $content->getDate() . ', like ' . $content->countLike() . ' / dislike
                   ' . $content->countDislike() . '</i></small>
       </h4>
       <p>' .nl2br($content->getMessage()) . '</p>
   </div>
   ' 
   . $rep . 
   '
   <div class="button btn-group float-right">
       <button type="button" class="btn btn-light" data-toggle="collapse" data-target="#showReply' . $content->getId() . '">Show
       Reply
       </button>
       <button type="button" class="btn btn-light" data-toggle="collapse"
       data-target="#input' . $content->getId() . '">Reply
       </button>
       <button type="button" class="btn btn-light">Like</button>
       <button type="button" class="btn btn-light">Dislike</button>
   </div>
   <div class="collapse reply" id="input' . $content->getId() . '">
       <form action="" method="POST" id="reply-form'.$content->getId().'">
           <textarea id="reply-input" placeholder=" Nhập nội dung " rows="7" name="reply"
           required></textarea>
           <input type="hidden" name="message_id" value="'. $content->getId() .'" />
           <button type="submit" class="reply_form btn btn-primary">Submit</button>
          
           <button class="btn btn-danger" data-toggle="collapse" data-target="#input'. $content->getId() .'">Cancel</button>
       </form>
       </div>
       </div> ';
}
}