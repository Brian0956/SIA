<?php
// Represents the "loans" table and its queries
class LoanModel {
    private $conn;
    public function __construct($conn) { $this->conn = $conn; }
    public function createLoan($bookId, $memberId) {
        $stmt = $this->conn->prepare("INSERT INTO loans (book_id, member_id, borrowed_on) VALUES (?,?,NOW())");
        $stmt->bind_param("ii", $bookId, $memberId);
        return $stmt->execute();
    }
    public function closeLoan($loanId) {
        $stmt = $this->conn->prepare("UPDATE loans SET returned_on = NOW() WHERE id = ?");
        $stmt->bind_param("i", $loanId);
        return $stmt->execute();
    }
}
