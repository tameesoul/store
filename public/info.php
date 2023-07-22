<?php 

trait Info{
    public function setage($age)
    {
         $this->age = $age; 
    }
    public static function gender($gender){
         self::$gender=$gender;
    }
}