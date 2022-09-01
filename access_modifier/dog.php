<?php
//Access modifiers helps to restrict the access of properties or methods
//can be applied ONLY on properties and methods
/*3 types of access modifiers:
    1)Public
    2)private
    3)Protected
*/
//help to hide properties and methods accessed from the object
/****************** Private access Modifiers*************
 * private access modifier means it can be accessed only inside and cannot be accessed from outside the class
 */
class dog{
    public $color;
    public $breed;
    function dogBark(){//default methods are public
        echo "Woof! WOof!".PHP_EOL;
    }
    function dogSleep(){
        echo "zzzzzzzzz".PHP_EOL;
    }
}
$dog1=new Dog();

$dog1->color="Black";
$dog1->breed="German shepard";

//call Methods
$dog1->dogBark();
$dog1->dogSleep();
?>