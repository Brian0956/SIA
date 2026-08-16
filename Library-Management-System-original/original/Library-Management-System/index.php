<?php
// Dashboard - shows quick stats when a librarian logs in
require_once 'db_connect.php';
include 'includes/header.php';

$totalBooks = $conn->query("SELECT COUNT(*) AS c FROM books")->fetch_assoc()['c'];
$totalMembers = $conn->query("SELECT COUNT(*) AS c FROM members")->fetch_assoc()['c'];
?>
<h1>Library Dashboard</h1>
<p>Total Books: <?php echo $totalBooks; ?></p>
<p>Total Members: <?php echo $totalMembers; ?></p>
<?php include 'includes/footer.php'; ?>
