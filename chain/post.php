<?php
//print and get the $content property from the $post1 at same the same time
class posts{
    public $content;
    function __construct($content)
    {
      
        echo "Hello from constructor".PHP_EOL;
        $this->content=$content;
    }
    function __destruct()
    {
        echo "Hello from destructor".PHP_EOL;
    }
    function printContent()
    {
        echo $this->content.PHP_EOL;
        return $this;
    }
}
$posts1=new posts("Hiiii from content");
$posts1->printContent()->content;
//$content=$posts1->printContent()->content;
//echo $content;
?>