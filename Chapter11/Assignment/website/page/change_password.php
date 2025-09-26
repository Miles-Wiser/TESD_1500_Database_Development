<?php
require "page.php";

$page = new Page;
$page->title = "$page->title | Sign In";
$page->moreStyle = true;
$page->style1 = "index.css";

$page->DisplayHead();

$db = new mysqli('localhost', 'admin',
            '12345', 'strandbank');
        if (mysqli_connect_errno()) {
            echo '<p>Error: Could not connect to database.<br />
                  Please try again later.</p>';
            exit;
        }

$query = "SELECT Name, AccountID
            FROM Accounts WHERE $searchtype = ?";
$stmt = $db->prepare($query);
$stmt->bind_param('s', $searchterm);
$stmt->execute();
$stmt->store_result();

$stmt->bind_result($name, $accountID);

$stmt->free_result();
$db->close();

?>
<form action="account.php" method="post">
    <div class="formRow">
        <label for="id">Account ID</label>
        <input type="text" name="id" placeholder="Account ID" maxlength="4">
    </div>

    <div class="formRow">
        <label for="id">New Password</label>
        <input type="password" name="password" placeholder="Password" maxlength="4">
    </div>

    <div class="formRow">
        <input id="btnLogin" type="submit" value="Login">
    </div>
</form>
<?php
$page->DisplayFoot();
?>