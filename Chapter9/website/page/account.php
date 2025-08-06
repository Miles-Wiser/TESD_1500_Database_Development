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
    <a href="#">Accounts</a>
    <a href="#">Loans</a>
    <a href="#">Credit Card</a>
    <a href="#">Settings</a>
</nav>

<?php
$page->DisplayFoot();
?>