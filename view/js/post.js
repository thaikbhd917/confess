$(function () {

    $('#confession-form').on('submit', function (e) {

      e.preventDefault();

      $.ajax({
        type: 'post',
        url: 'post.php',
        data: $('#confession-form').serialize(),
        success: function (data) {
         document.getElementById("contents").innerHTML=data;
        }
      });

    });

  });