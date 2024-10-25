<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
  if(empty($_POST['rate'])){
    echo "<h1 class='error'>No se encuentra valoracion</h1>";
  } else {
    $rate = $_POST['rate'];
    //echo $rate;
    $date = new DateTime();
    $path = '../data/';
    $fileName = $path . $date->format('Y_m_d_H_i') . '.csv';
    file_put_contents($fileName, $rate . ', ', FILE_APPEND | LOCK_EX);
 ?>
 <h1>Gracias por tu valoracion</h1>
  <?php 
  } ?>

  <p><a href="index.php">volver a valorar</a></p>
  <script>
    function changePage(){
      window.location.href = "index.php";
    } 

    setTimeout(changePage, 2000);
  </script>
</body>
</html>