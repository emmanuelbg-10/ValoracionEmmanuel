<?php
namespace DSW\Rating;

use PDO;

class StoreDB implements StoreInterface {
  private $link;

  public function __construct($host, $user, $password, $db)
  {
    $dsn = "mysql:host=$host;dbname=$db";
    $this->link = new PDO($dsn, $user, $password);
  }

  public function addRate(int $rate)
  {
    $this->link->exec("INSERT INTO rates (date, rate) VALUES (NOW(), $rate)");
  }

  public function getStadistics(): array
  {
    $results = $this->link->query('SELECT date_format(date, "%Y-%c-%d") as day, date_format(date, "%H:%i") as time, count(rate)
    return $results->fetchAll(PDO::FETCH_ASSOC);
  }
}