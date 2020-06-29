<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
      function funcBefore(){
        $('#information').text('Идет загрузка...');
      };

      function funcSuccess(data){
        $('#information').text(data);
      };

      $(document).ready(function(){
        $('#load').bind('click', function(){
          var admin = "Admin";
          $.ajax({
            url: "content.php",
            type: "POST",
            data: ({name: admin, number: 5}),
            dataType: "html",
            beforeSend: funcBefore,
            success: funcSuccess
          });
        });
      });

      $(document).ready(function(){
        $('#done').bind('click', function(){
          $.ajax({
            url: "check.php",
            type: "POST",
            data: ({name: $('#name').val()}),
            dataType: "html",
            beforeSend: function(){
              $('#information').text('Идет загрузка...');
            },
            success: function(data){
              if(data == "Fail")
                $('#information').text('Имя занято');
              else
                $('#information').text(data);
            },
          });
        });
      });

      $(document).ready(function(){
        $('select[name="country"]').bind('change', function(){
          $('select[name="city"]').empty();
          $.get("countryCheck.php", {country: $('select[name="country"]').val()}, function (data){
            data = JSON.parse(data);
            for(var id in data){
              $('select[name="city"]').append($("<option value = '" + id + "'>" + data[id] + "</option>"));
            };
          });
        });
      });
    </script>
  </head>
  <body>
    <input id="name" type="text" name="name" placeholder="Введите имя">
    <input id="done" type="button" name="done" value="Готово">
    <p id="load" style="cursor:pointer">Загрузить данные</p>
    <div id="information"></div>

    <h3>JSON</h3>
    <label for="">Укажите страну</label>
    <select class="" name="country">
      <option value="0" selected="selected"></option>
      <option value="1">Америка</option>
      <option value="1">Франция</option>
    </select>
    <label for="">Города</label>
    <select class="" name="city">
      <option value="0"></option>
    </select>
  </body>
</html>
