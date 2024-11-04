<?php
namespace DSW\Rating;

use DateTime;

class StoreFile implements StoreInterface {

  public function addRate(int $rate)
  {
    $date = new DateTime();
    $path = '../data/';
    $fileName = $path . $date->format('Y_m_D_H_i') . 'csv';
    file_put_contents($fileName, $rate . ',' . FILE_APPEND);
  }

  public function getStadistics(): array
  {
    return [];
  }
}