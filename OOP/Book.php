<?php 
class Book{
    public $title, $author, $ISBN;

    public function __construct($title, $author, $ISBN){
        $this->title = $title;
        $this->author = $author;
        $this->ISBN = $ISBN;
    }
    function getDetails(){
        $title=$this->title;
        $author=$this->author;
        $ISBN=$this->ISBN;
        return "Title: $title<br>Author: $author<br>ISBN: $ISBN";
    }
}
?>