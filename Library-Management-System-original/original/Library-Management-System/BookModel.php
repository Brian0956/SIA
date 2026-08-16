<?php
// Represents the "books" table and its queries
class BookModel {
    private $conn;
    public function __construct($conn) { $this->conn = $conn; }
    public function getAllBooks() {
        return $this->conn->query("SELECT * FROM books");
    }
    public function createBook($title, $author, $isbn) {
        $stmt = $this->conn->prepare("INSERT INTO books (title, author, isbn) VALUES (?,?,?)");
        $stmt->bind_param("sss", $title, $author, $isbn);
        return $stmt->execute();
    }
}
