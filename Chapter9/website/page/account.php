<?php
require "page.php";

$page = new Page;
$page->DisplayHead();

$id = $_POST['id'];
$password = $_POST['password'];
?>


<?php
$page->DisplayFoot();
?>