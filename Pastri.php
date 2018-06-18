<?php


# Start with Initial Value 1
## [0: 1]
## [1: 1,1]
## [2: 1,2,1]
## [3: 1,3,3,1]
## [4: 1,4,6,4,1]



class Pastri {

  protected const DEFAULT_INITIAL = 1;
  protected const DEFAULT_MAX_ROWS = 10;


  function __construct ($argv){
    $this->argv = $argv;
  }

  public static function getArgv ($argv) {
    foreach ($argv as $value)
    {
      echo "$value\n";
    }
  }

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
$test = Pastri::addPairs([1,2,3,5,7,11,13,17,19,23]);
Pastri::getArgv($argv);
sprintf($test);