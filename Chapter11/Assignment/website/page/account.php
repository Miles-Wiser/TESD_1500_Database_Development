<?php
require "page.php";

$page = new Page;
$page->title = "$page->title | Personal Account";
$page->moreStyle = true;
$page->style1 = "account.css";

$page->DisplayHead();

$id = $_POST['id'];
$password = $_POST['password'];

$name = $id;

// Check database
$db = new mysqli('localhost', 'admin',
            '12345', 'strandbank');
        if (mysqli_connect_errno()) {
            echo '<p>Error: Could not connect to database.<br />
                  Please try again later.</p>';
            exit;
        }

$query = "SELECT Name, AccountID, CheckingBal
            FROM Accounts WHERE $searchtype = ?";
$stmt = $db->prepare($query);
$stmt->bind_param('s', $searchterm);
$stmt->execute();
$stmt->store_result();

$stmt->bind_result($name, $accountID, $CheckingBal);

$stmt->free_result();
$db->close();
?>
<nav id="nav">
    <a href="account.php">Accounts</a>
    <a href="#">Loans</a>
    <a href="#">Credit Card</a>
    <a href="#">Profile</a>
</nav>

<main>
    <div id="accounts">
        <!-- Display database info -->
        <h2>Account: <?php echo "$name: $accountID" ?></h2>
        <h3>Checking</h3>
        <p>Balance: <?php echo $CheckingBal ?></p>
    </div>
</main>

<?php
$page->DisplayFoot();
?>