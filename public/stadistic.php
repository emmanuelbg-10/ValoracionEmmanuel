<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $fileName = '..\data\2024_10_25_15_05.csv';

  try {
    //code...
   
  

  
  $content = file_get_contents($fileName);
  $rates = explode(',', $content);
  array_pop($rates);
  $count = count($rates);
  $total = array_sum($rates);
  $avg = $total / $count;

  echo $count . "<br>";
  echo $total ."<br>";
  echo $avg . "<br>";
  }catch (E_WARNING $a) {
  
  }
  echo substr($fileName, 8,16 );
  ?>
</body>
</html>