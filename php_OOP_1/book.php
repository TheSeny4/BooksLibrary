<?php

class Book{

    public $title;
    public $author;
    public $year;
    public $isAvaible;

    public function __construct ($title, $author, $year){
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->isAvaible = true;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getYear(){
        return $this->year;
    }

    public function getAvailability(){
        return $this->isAvaible;
    }

    public function setAvailability($status){
        return $this->isAvaible = $status;
    }

}

?>