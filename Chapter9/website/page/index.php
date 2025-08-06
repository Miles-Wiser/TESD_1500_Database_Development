<?php
require "page.php";

$page = new Page;
$page->title = "$page->title | Sign In";
$page->moreStyle = true;
$page->style1 = "index.css";

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
        <input id="btnLogin" type="submit" value="Login">
        <a id="forgotPassword" href="#">Forgot Password?</a>
    </div>
</form>
<?php
$page->DisplayFoot();
?>