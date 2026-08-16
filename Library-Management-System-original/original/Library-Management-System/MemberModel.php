<?php
// Represents the "members" table and its queries
class MemberModel {
    private $conn;
    public function __construct($conn) { $this->conn = $conn; }
    public function createMember($name, $email) {
        $stmt = $this->conn->prepare("INSERT INTO members (name, email) VALUES (?,?)");
        $stmt->bind_param("ss", $name, $email);
        return $stmt->execute();
    }
}
