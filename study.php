<?php

class account{
    public $nicname;
    private $password;
    protected $gender;

    function setlnicname($nicname) {
        return $this -> nicname;
    }
    function setpassword($password) {
        return $this -> password;
    }
    function setgender($gender) {
        return $this -> gender;
    }
    function getnicname($nicname) {
         $this -> nicname = $nicname;
    }
    function getpassword($password) {
         $this -> password = $password;
    }
    function getgender($gender) {
         $this -> gender = $gender;
    }

    public function setaccount(){
        echo $this->nicname;
        echo "<br>";
        echo $this->password;
        echo "<br>";
        echo $this->gender;
    }

}

$account1 = new account();
$account1 ->getnicname('Khyza');
$account1 ->getpassword('Khyza 321');
$account1 ->getgender('Pria');

echo $account1->setaccount();

?>

