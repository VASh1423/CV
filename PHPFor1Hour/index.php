<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>PHP web site</title>
  </head>
  <body>
    <?php require "bloks/header.php"; ?>
    <div class="container mt-5">
      <h3 class="mb-5">Наши статьи</h3>
      <div class="d-flex flew-wrap">
          <?php
            for ($i=0 ; $i < 5; $i++ ):
           ?>
           <div class="cards mb-4 shadow-sm">
           <div class="card-header">
             <h4 class="my-0 font-weight-normal">Просто текст</h4>
           </div>
           <div class="card-body">
             <img src="img/<?php echo ($i+1); ?>.jpg" class="img-thumbnail">
             <ul class="list-unstyled mt-3 mb-4">
               <li>10 users included</li>
               <li>2 GB of storage</li>
               <li>Email support</li>
               <li>Help center access</li>
             </ul>
             <button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее</button>
           </div>
         </div>
       <?php endfor; ?>
      </div>
    </div>
    <?php require "bloks/footer.php"; ?>
  </body>
</html>
