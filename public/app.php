<?php

namespace A;
include __DIR__."/autoload.php";
$person = new \B\Person;


/// B Class
 $person->name = "ahmed";
 "<br>";
$person->setage(20);
 "<br>";
  Person::$gender = "m";
 "<br>";
 ///A CLASS
$person2 = new Person;
 $person2->name = "rawan";
 "<br>";
$person2->setage(20);
 "<br>";
 echo "<br>";
 Person::$gender = "f";
echo "<br>";
var_dump($person , $person2);
