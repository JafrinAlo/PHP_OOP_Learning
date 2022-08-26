<?php
class Files
{
    public function displayContent($filename)
    {
        if (!file_exists($filename)) {
            echo "$filename doesnot exist".PHP_EOL;
            return;
        }
        echo file_get_contents($filename).PHP_EOL;
        /*$result=true;
        try{
            echo "Read the content of the file: $filename".PHP_EOL;
            $content=file_get_contents($filename);
            echo "Displaying Content of the $filename".PHP_EOL;
            echo $content;
        }catch(Exception $e){
            $result=false;
        }
        return $result;*/
    }

    public function getContent($filename):string
    {
        if (!file_exists($filename))
        {
            echo "$filename doesnot exist".PHP_EOL;
            return "";
        }
        $content=file_get_contents($filename).PHP_EOL;
        return $content;
    }
}

$files1= new Files();
$files1->displayContent("test.txt");
echo "Here is test.txt ". $files1->getContent("test.txt").PHP_EOL;
$files2=new Files();
$files2->displayContent("test2.txt");

?>