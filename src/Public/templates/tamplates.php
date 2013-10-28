<?php
class Template{
    
    public $file;
    public $output;
    public $values=array();
    
    function __construct($file) {
       $this->file=$file;
       $this->output= file_get_contents($file);
    }
    
    function set($key,$value){
        $this->values[$key]=$value;
    }
    
    function output(){
        foreach ($this->values as $key=> $value){
            $tagsToReplace="[$key]";
            $this->output= str_replace($tagsToReplace, $value, $this->output);
        }
        return $this->output;
    }
}
