<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Список дел</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  </head>
  <body>
      <div class="container">
        <h1>Список дел</h1>
        <form action="add.php" method="post">
          <input type="text" name="task" id="task" placeholder="Нужно сделать..." class="form-control">
          <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
        </form>

        <?php
          require 'configDB.php';

          echo '<ul>';
          $query = $pdo->query('SELECT * FROM  `tasks` ORDER BY `id`');
          while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo '<li><b>'.$row->task.'</b><a href="delete.php?id='.$row->id.'"><button>Удалить</button></a></li>';
          }
          echo '</ul>';
         ?>

      </div>
  </body>
</html>
