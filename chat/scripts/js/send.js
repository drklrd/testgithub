$('#former').submit (function () {
  // alert ('Done');
  var message = $('#message').val();
  var sender  = $('#sender').val();

  $.ajax  ({
          url: 'scripts/php/send.php',
          data : {sender : sender, message:message},
          success : function (data) {
                   $('#feedback').html(data);
                   $('#feedback').fadeIn('slow', function () {
                     $('#feedback').fadeOut(1000);
                     });
                   $('#message').val('');

                   }


    });

   return false;

  });