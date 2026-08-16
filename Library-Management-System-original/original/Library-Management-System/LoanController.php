<?php
// Handles borrowing and returning of books
require_once 'db_connect.php';
require_once 'LoanModel.php';

class LoanController {
    private $model;
    public function __construct($conn) {
        $this->model = new LoanModel($conn);
    }
    public function borrowBook($bookId, $memberId) {
        return $this->model->createLoan($bookId, $memberId);
    }
    public function returnBook($loanId) {
        return $this->model->closeLoan($loanId);
    }
}
