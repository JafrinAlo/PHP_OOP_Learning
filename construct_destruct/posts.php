<?php
/*Destructor are magic methods that gets loaded automatically just before the instance of a class is destroyed.

__destruct(void):void --- no input parameters no return value

Purpose of Destructor:
------- To do clean up activities(eg closing database connection or saving file).
-------save the log file
-------write activity logs-End time
-------free up the resources
-------save the properties into a file
-------Save the cache
-------serialize the objects
*/
class posts{
    function __construct()
    {
        echo "Hello from constructor".PHP_EOL;
    }
    function __destruct()
    {
        echo "Hello from destructor".PHP_EOL;
    }
}
$posts1=new posts();
?>