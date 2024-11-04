<?php
namespace Dsw\Rating;

use PDO;

class StoreDB implements StoreInterface {
  private PDO $link;

  public function __construct($host, $user, $password, $db)
  {
    $dsn = "mysql:host=$host;dbname=$db";
    $this->link = new PDO($dsn, $user, $password); 
  }

  public function addRate(int $rate) {
    $this->link->exec("INSERT INTO rates (date, rate) VALUES (NOW(), $rate)");
  }

  public function getStadistics(): array 
  {
    $results = $this->link->query('SELECT date_format(date, "%Y-%c-%d") as day, date_format(date, "%H:%i") as time, count(rate) as count, avg(rate) as avg FROM rates GROUP BY day, time');
    return $results->fetchAll(PDO::FETCH_ASSOC);
  }

  public function __destruct()
  {
    unset($this->link);
  }

}