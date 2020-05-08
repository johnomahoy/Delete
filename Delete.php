<?php
require_once("isdk.php");	
$app = new iSDK;
if( $app->cfgCon("aa478")){ 

$array = array(147799,360705,95887,267457,23637,
212049,77643,156595,162167,96941,147839,242681,365495,
227711,102065,24039,61989,115581,
173393,103457,224705,372979,19971);
foreach($array as $value){
  echo "Delete: $value<br>";
  $result = $app->dsDelete('Company',$value);
}
}
?>
