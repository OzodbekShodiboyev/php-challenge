<?php 



class Library { 
    public $books = [];

    public function addBook(Book $book){
        $this->books[$book->ISBN] = $book;
    }

    public function listBooks(){
        $books = $this->books;
        foreach ($books as $book) {
            echo $book->title. " by ". $book->author. "<br>";
        }
    }
    public function removeBook(Book $book){
        unset($this->books[$book->ISBN]);
    }
}
?>