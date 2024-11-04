<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>Estadísticas</h1>
  <table>
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Cantidad</th>
        <th>Media</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require_once 'connection.php';

      $stadistics = $store->getStadistics();
      foreach ($stadistics as $stat) {
        printf("<tr><td>%s</td><td>%s</td><td>%d</td><td>%.2f</td></tr>",
        $stat['date'], $stat['time'], $stat['count'], $stat['avg']); 
      }
      $link = null;
      ?>
    </tbody>
  </table>
  </tbody>
  </table>
</body>

</html>