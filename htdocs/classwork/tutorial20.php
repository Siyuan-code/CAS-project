<?php
    class Person{
        private $name;
        private $email;
        private static $agelimit = 40;

        public function __construct($name, $email){
            // echo 'person';
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__. ' created'."<br>";
        }

        public function __destruct(){
            echo __CLASS__. ' destroyed'."<br>";
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public static function getAgelimit(){
            return self::$agelimit;
        }
    }
    // static props and methods
    // echo Person::$agelimit;
    echo Person::getAgelimit();
    // $person1 = new Person('Siyuan Ruan', 'siyuan.r_daa@gemsdaa.net');

    // $person1->setName('Siyuan Ruan');

    // echo $person1->getName();

   

    // $person1->name = 'Siyuan Ruan';

    // echo $person1->name;

    class customer extends Person{
        private $balance;

        function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo "A new ".__CLASS__." has been created ";
        }

        function setBalance($balance){
            $this->balance = $balance;
        }

        function getBalance(){
            return $this->balance;
        }
    }

    $customer1 = new customer("Siyuan", "siyuan@gmail.com", 400);
    echo $customer1->getBalance()."<br>";