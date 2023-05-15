<!-- 
    Система управления библиотекой. Для этого нам потребуются три класса: 
        Book
        Author
        Library

    Класс Book будет иметь следующие свойства:
        $title
        $author_id
        $is_available

    Класс Author будет иметь следующие свойства:
        $id
        $last_name

    Класс Library будет иметь следующие свойства:
        $books

    Теперь, нам необходимо реализовать  методы в классе Library. Например:
        addBook(Book $book) - добавляет книгу в библиотеку
        removeBook(Book $book) - удаляет книгу из библиотеки
        getBooks() - возвращает все книги из библиотеки
        getAvailableBooks() - возвращает все доступные книги из библиотеки
        getBookByTitle($title) - возвращает книгу по ее названию
        getBooksByAuthor(Author $author) - возвращает все книги автора 
-->


<?php
include_once './Classes/Author.php';
include_once './Classes/Book.php';
include_once './Classes/Library.php';

$author1 = new Author(1, 'author1');
$author2 = new Author(2, 'author2');
$author3 = new Author(3, 'author3');

$book1 = new Book('title1', $author1->getId(), true);
$book2 = new Book('title2', $author2->getId(), false);
$book3 = new Book('title3', $author3->getId(), true);

$library = new Library();

$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

echo '<pre>';
// print_r($library->getBooks());
// print_r($library->removeBook($book2));
// print_r ($library->getAvailableBooks());
// print_r($library->getBookByTitle('title1'));
// print_r($library->getBooksByAuthor($author2));
echo '</pre>';







?>