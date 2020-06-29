$("#sendMail").on('click', function(){
  var email = $('#email').val().trim();
  var name = $('#name').val().trim();
  var phone = $('#phone').val().trim();
  var message = $('#message').val().trim();

  if(email == ""){
    $('#errorMess').text('Введите email');
    return false;
  } else if(name == ""){
    $('#errorMess').text('Введите имя');
    return false;
  } else if(phone == ""){
    $('#errorMess').text('Введите номер');
    return false;
  } else if(message.length < 5){
    $('#errorMess').text('Введите сообщение больше 5 символов');
    return false;
  }

  $('#errorMess').text('');

  $.ajax({
    url: "ajax/mail.php",
    typr: "POST",
    cache: false,
    data:{'name': name, 'email': email, 'phone': phone, 'message': message},
    dataType: 'html',
    beforeSend: function(){
      $('#sendMail').prop('disabled', true);
    },
    success: function(data){
      if(!data)
        alert("Были ошибки, форма не отправлена");
      else
      $('#mailForm').trigger('reset');
    }
  });

});
