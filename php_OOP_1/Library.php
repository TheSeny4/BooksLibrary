<?php
class Library {
    private $books;
    private $readers;

    public function __construct() {
        $this->books = [];
        $this->readers = [];
    }

    public function addBook($book) {
        $this->books[] = $book;
        echo "Книга '{$book->getTitle()}' добавлена в библиотеку.<br>";
    }

    public function addReader($reader) {
        $this->readers[] = $reader;
        echo "Читатель '{$reader->getName()}' зарегистрировался.<br>";
    }

    public function findBook($title) {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) {
                return $book;
            }
        }
        return null;
    }

    public function listBooks() {
        if (empty($this->books)) {
            echo "В библиотеке не осталось книг.<br>";
            return;
        }

        foreach ($this->books as $book) {
            $status = $book->getAvailability() ? "Доступна" : "Не доступна";
            echo "Название: {$book->getTitle()}, Автор: {$book->getAuthor()}, Статус: {$status}<br>";
        }
    }
}