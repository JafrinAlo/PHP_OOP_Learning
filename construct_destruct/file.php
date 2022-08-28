<?php
class file{
    public $filename;
    public $fileHandler;
    public $filesize;
    public $content;
    public $fileFound;
    function __construct($filename)
    {
        $this->fileHandler=null;
        $this->fileFound=false;
        $this->filename=$filename;
       
        //check if file exists
        if(file_exists($filename)){
            //is this a file?
            if(is_file($filename)){//now we safe to open the file
                $this->fileFound=true;
            }

        }
        if($this->fileFound){
            $this->fileHandler=fopen($filename,"r");
            $this->filesize=filesize($filename);
        }
    }
    function __destruct()
    {
       if($this->fileFound){
            fclose($this->fileHandler);
            echo $this->filename." closed by destructor".PHP_EOL;
       }
    }
    function getContent(){
        if($this->fileFound){
            $content=fread($this->fileHandler,$this->filesize);
            return $content;
        }else{
            return "No files found";
        }
    }
    
}
$file1=new file("test.txt");
echo $file1->getContent();
$file2=new file("test2.txt");
echo $file2->getContent();
?>