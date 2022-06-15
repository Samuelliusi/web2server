<?php
//all your code
//$myName = "Samuel liusi";
//echo  $myName;

//arrays
//$students = array("purity","samuel","kelvin");
//echo $students[2];

//associatve array
$marks = array("purity"=>40,
               "samuel"=>70,
               "kelvin"=>60
               );
echo "samuel: " .$marks["samuel"];  

//multideminsional arrys
$webDevTechnology = array(
    "fronted" => array("html","bootstrap","css","js"),
    "backend" => array("PHP","python","java","js"),
    "database" => array("MYSQL","postgressSQL","mongo DBS","firebase"),
    "framework" => array("Jungo","Laravel","Screenshot","flutter"),
); 
echo $webDevTechnology["fronted"][2]; //will be our output
echo $webDevTechnology["backend"][3];
echo $webDevTechnology["database"][2];
echo $webDevTechnology["framework"][1];
 ?>