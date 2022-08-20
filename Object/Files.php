<?php
class Files{
    function displayContent($filename):bool{
    $result=true;
    try{
        echo "Read the content of the file: $filename".PHP_EOL;
        $content=file_get_contents($filename);
        echo "Displaying Content of the $filename".PHP_EOL;
        echo $content;
    }catch(Exception $e){
        $result=false;
    }
    return $result;
    }
}

$files1= new Files();
$files1->displayContent("test.txt");

$files2=new Files();
$files2->displayContent("test2.txt");

?>