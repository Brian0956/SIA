<?php
// Exports a CSV report of all current loans
require_once '../db_connect.php';

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="loans_report.csv"');

$output = fopen('php://output', 'w');
fputcsv($output, ['Loan ID', 'Book', 'Member', 'Borrowed On', 'Returned On']);

$result = $conn->query("SELECT l.id, b.title, m.name, l.borrowed_on, l.returned_on
                         FROM loans l
                         JOIN books b ON l.book_id = b.id
                         JOIN members m ON l.member_id = m.id");
while ($row = $result->fetch_assoc()) {
    fputcsv($output, $row);
}
fclose($output);
