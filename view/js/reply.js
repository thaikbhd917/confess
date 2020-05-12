$(function () {
  $('.reply_form').closest("form").on('submit', function (e) {

    e.preventDefault();

    $.ajax({
      type: 'post',
      url: 'reply.php',
      data: $(this).closest("form").serialize(),
      success: function (data) {
        var id =$(this).closest("form").attr("message_id") ;
        console.log(id);
        document.getElementById("contents").innerHTML = data;
        location.reload();

      }
    });

  });
})
