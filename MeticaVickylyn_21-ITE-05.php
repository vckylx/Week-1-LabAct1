<?php
class Person{
    public $firstName;
    public $lastName;
    private $age;

    function __construct($firstName, $lastName, $age){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;

}
    public function getFullName(){
        return $this->firstName . " ". $this->lastName;
}
    public function __setAge($age){
        $this->age = $age;
}
    public function __getAge(){
        return $this->age;
    }
}

class Car{
    public $make;
    public $model;
    protected $year;

    function __construct($make,$model,$year){
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    public function getCarInfo(){
        return $this->make . ' ' . $this->model . ' (' . $this->year . ')';
    }
}

$person = new Person("Vickylyn", "Metica", "19");
    echo "Full Name: ".$person->getFullName();
    echo "\n";
    echo "Age: " .$person->__getAge();
    echo "\n";
$person->__setage(19);
    echo "Updated Age: ".$person->__getAge();
    echo "\n";
$car = new Car('Toyota','Corolla', 2021);
    echo "Car Info: " .$car->getCarInfo();
    echo "\n";

?>