<?php
require "page.php";

$page = new Page;
$page->title = "$page->title | Sign In";


$page->DisplayHead();
?>
<form action="account.php" method="post">
    <div class="formRow">
        <label for="id">Account ID</label>
        <input type="text" name="id" placeholder="Account ID" maxlength="4">
    </div>

    <div class="formRow">
        <label for="id">Password</label>
        <input type="password" name="password" placeholder="Password" maxlength="4">
    </div>

    <div class="formRow">
        <input type="submit" value="Login">
    </div>
</form>
<?php
$page->DisplayFoot();
?>