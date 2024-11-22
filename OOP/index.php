<?php 

include "Book.php";
include "Library.php";

$library = new Library();
//create books
$book1=new Book("UFQ 1", "Said Ahmad", 1234);
$book2=new Book("UFQ 2", "Said Ahmad", 12345);
$book3=new Book("UFQ 3", "Said Ahmad", 12346);
$book4=new Book("UFQ 4", "Said Ahmad", 12347);
$book5=new Book("UFQ 5", "Said Ahmad", 12348);
$book6=new Book("UFQ", "Said Ahmad", 12342);
$book7=new Book("UFQ", "Said Ahmad", 123432);
$book8=new Book("UFQ", "Said Ahmad", 123423);

//add books to library
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);
$library->addBook($book4);
$library->addBook($book5);

// remove books from library
$library->removeBook($book1);
$library->removeBook($book2);

//list books
echo $library->listBooks();



?>