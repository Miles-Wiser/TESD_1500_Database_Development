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
?>
<nav id="nav">
    <a href="account.php">Accounts</a>
    <a href="#">Loans</a>
    <a href="#">Credit Card</a>
    <a href="#">Profile</a>
</nav>

<main>
    <div id="accounts">
        <h2>Accounts</h2>
        <h3>Checking</h3>
        <h3>Savings</h3>
        <h3>Credit Card</h3>
    </div>
</main>

<?php
$page->DisplayFoot();
?>