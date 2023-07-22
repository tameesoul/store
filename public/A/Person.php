<?php   
namespace A;

use Info;
    class Person
    {
     use Info;
        public $name; 
        private $age;
        public static $gender;

        public function __construct()
        {
          echo __CLASS__;
        }

    }