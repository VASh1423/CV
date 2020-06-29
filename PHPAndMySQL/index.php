<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container mt-4">
      <?php
        if($_COOKIE['user'] == ''):
       ?>
      <div class="row">
        <div class="col">
          <h1>Форма регистрации</h1>
          <form action="validation-form/check.php" method="post">
            <input class="form-control" type="text" name="login" id="login" placeholder="Введите логин"><br>
            <input class="form-control" type="text" name="name" id="name" placeholder="Введите имя"><br>
            <input class="form-control" type="password" name="pass" id="pass" placeholder="Введите пароль"><br>
            <button type="submit" name="button" class="btn btn-success">Зарегистрироваться</button>
          </form>
        </div>
        <div class="col">
          <h1>Форма авторизации</h1>
          <form action="validation-form/auth.php" method="post">
            <input class="form-control" type="text" name="login" id="login" placeholder="Введите логин"><br>
            <input class="form-control" type="password" name="pass" id="pass" placeholder="Введите пароль"><br>
            <button type="submit" name="button" class="btn btn-success">Авторизоваться</button>
          </form>
        </div>
      </div>
    <?php else:?>
      <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти, нажмите <a href="exit.php">здесь</a>.</p>
    <?php endif;?>
    </div>
  </body>
</html>
