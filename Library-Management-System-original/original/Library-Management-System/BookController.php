<?php
// Handles book-related requests: add, update, delete, list
require_once 'db_connect.php';
require_once 'BookModel.php';

class BookController {
    private $model;
    public function __construct($conn) {
        $this->model = new BookModel($conn);
    }
    public function listBooks() {
        return $this->model->getAllBooks();
    }
    public function addBook($title, $author, $isbn) {
        return $this->model->createBook($title, $author, $isbn);
    }
}
