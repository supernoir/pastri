<?php

class Pastri {

  const DEFAULT_INITIAL = 1;

  public static function initializeRow ($initial)
  {
    if (!isset($initial))
    {
      $initial = DEFAULT_INITIAL;
    }
    $initialRow = array($initial);
    print_r($initialRow);
    return $initialRow;
  }

  public static function setNextRow ($previousRow)
  {
    foreach($previousRow as $item)
    {
      print_r($item);
    };
    $row = array(1,2,1);
    array_push($row, $previousRow);
    print_r($row);
  }

  public static function addPairs ($row)
  {
    for($i = 0; $i < sizeof($row); $i++)
    {
      print("\n".$row[$i].PHP_EOL);
     }
  }

  public static function calculateTriangle ($initial)
  {
    printf($initial * 11);
  }
 
  function exportResult($result, $method)
  {
    var_dump($result, $method);
  }
}

//$pastry = Pastri::initializeRow(1);
//$tasty = Pastri::setNextRow([1,2,1]);
$test = Pastri::addPairs([1,1,3,5,7,13,17]);
sprintf($test);