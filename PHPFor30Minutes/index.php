<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Обратная связь</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Обратная связь</h1>
      <form id="mailForm" action="index.html" method="post">
        <input type="email" id="email" name="email" placeholder="Email" class="form-control"><br>
        <input type="text" id="name" name="name" placeholder="Введите имя" class="form-control"><br>
        <input type="phone" id="phone" name="phone" placeholder="Телефон" class="form-control"><br>
        <textarea name="message" id="message" rows="8" cols="80" placeholder="Введите сообщение" class="form-control"></textarea><br>
        <button type="button" id="sendMail" class="btn btn-success">Отправить</button>
      </form>
      <div id="errorMess"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/formMail.js"></script>
  </body>
</html>
