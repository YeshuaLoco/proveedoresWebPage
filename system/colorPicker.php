<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link href="js/colorpicker/dist/css/bootstrap-colorpicker.css" rel="stylesheet">
</head>
<body>
  <div class="container">
      <input id="mycp" type="text" class="form-control" />
  </div>
  <script src="//code.jquery.com/jquery-3.2.1.js"></script>
  <script src="js/colorpicker/dist/js/bootstrap-colorpicker.js"></script>
  <script>
    $(function () {
      $('#mycp').colorpicker();
    });
  </script>
</body>