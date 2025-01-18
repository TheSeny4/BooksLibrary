<?php
include 'Book.php';
include 'Reader.php';
include 'Library.php';

$library = new Library();

$book1 = new Book("Гарри Поттер и узник Азкабана", "Дж.К. Роулинг", 1999);
$book2 = new Book("Преступление и наказание", "Фёдор Достоевский", 1866);

$library->addBook($book1);
$library->addBook($book2);

$reader1 = new Reader("Максим", "Vershinin123@yandex.ru");
$reader2 = new Reader("tachumi", "Carletti@gmail.com");

$library->addReader($reader1);
$library->addReader($reader2);

$library->listBooks();

$reader1->borrowBook($book1);
$reader2->borrowBook($book1);

$library->listBooks();

$reader1->returnBook($book1);
