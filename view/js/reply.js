$('body').on('click' , '.reply_form',$(function() {
  $('.reply_form').closest("form").on('submit', function (e) {
  
    e.preventDefault();
  
    $.ajax({
      type: 'post',
      url: 'reply.php',
      data: $(this).closest("form").serialize(),
      success: function (data) {
       document.getElementById("contents").innerHTML=data;
      }
    });
  
  });
  }));
