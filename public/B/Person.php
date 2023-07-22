<?php   

     namespace B;
     use \A\Person as PersonA;
     use Info;
    class Person extends PersonA
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