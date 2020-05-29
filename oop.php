<?php
class Person{
    //atributes
    private $name;
    private $email;
    public static $ageLimit = 40;

    //mehods
   public function __construct($name, $email){
       $this->name = $name;
       $this->email = $email;
       echo __CLASS__. ' created <br>';
   }
   public function __destruct(){
       echo __CLASS__. ' destroyed<br>';
   }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name. '<br>';
    }
    public function setEmail($email){
        $this->name = $email;
    }
    public function getEmail(){
        return $this->email. '<br>';
    }
    public static function getAgeLimit(){
        return self::$ageLimit;
    }
}
#static props and method
//echo Person::$ageLimit;
//echo Person::getAgeLimit();


/*
$person1 = new Person('John Doe', 'jd@test.com');
echo $person1->getName();
echo $person1->getEmail();
echo '<br>';
$person2 = new Person('Andy Hart', '@test.com');
echo $person2->getName();
echo $person2->getEmail();

$person1 -> __destruct();


$person1->setName('Andy andy');
echo $person1->getName();
$person1->setEmail('john@test.com');
echo $person1->getEmail();
*/
//$person1->name = 'John Doe';
//echo $person1->name;

class Customer extends Person{
    public $balance;
    public function __construct($name, $email, $balance){
        parent::__construct($name, $email, $balance);
        $this->balance = $balance;
        echo 'A new '.__CLASS__.' has been created';
    }
    public function setBalance($balance){
        $this->balance = $balance;
    }
    public function getBalance(){
        return $this->balance .'<br>';
    }

}

//$customer1 = new Customer('John Doe', ' jdoe@gmail.com', 50);


//echo $customer1->getName();
//echo $customer1->getBalance();