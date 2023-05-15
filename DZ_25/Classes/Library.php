<?php

include_once './Classes/Author.php';
include_once './Classes/Book.php';

class Library{

    private array $books = [];

    public function setBooks(array $books){
        $this->books = $books;
    }

    public function addBook(Book $book){
        return $this->books[] = $book;
    }

    public function removeBook(Book $book){
        return array_filter($this->books, function($item) use ($book){
            return $item !== $book;
        });
    }

    public function getBooks() : array{
        return $this->books;
    }

    public function getAvailableBooks(){
        return array_filter($this->books, function ($item){
            return $item->getIsAvailable() == true;
         });
    }

    public function getBookByTitle($title){
        return array_filter($this->books, function($item) use ($title){
            return $title == $item->getTitle();
        });
    }

    public function getBooksByAuthor(Author $author){
        return array_filter($this->books, function($item) use ($author){
            return $author->getId() == $item->getAuthorId();
        });
    }
}
?>