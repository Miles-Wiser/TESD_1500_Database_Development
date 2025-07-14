<?php
require "page.php";

$page = new Page;


$page->DisplayHead();
?>

<form action="process.php" method="post">
    <table>
        <tr>
            <th>Book</th>
            <th>Price</th>
            <th>Qty</th>
        </tr>
        <tr>
            <td>The Modest Marriage</td>
            <td>$23.99</td>
            <td><input type="text" name="The_Modest_Marriage" size="1" maxlength="1"></td>
        </tr>
        <tr>
            <td>The Scientist's Uncle</td>
            <td>$12.99</td>
            <td><input type="text" name="The_Scientist's_Uncle" size="1" maxlength="1"></td>
        </tr>
        <tr>
            <td>Into the Boisterous Infinity</td>
            <td>$15.99</td>
            <td><input type="text" name="Into_the_Boisterous_Infinity" size="1" maxlength="1"></td>
        </tr>
        <tr>
            <td>A Theory of Praise</td>
            <td>$17.99</td>
            <td><input type="text" name="A_Theory_of_Praise" size="1" maxlength="1"></td>
        </tr>
        <tr>
            <td id="purchase"><input type="submit" name="purchase" value="Purchase"></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</form>
<?php
$page->DisplayFoot();
?>