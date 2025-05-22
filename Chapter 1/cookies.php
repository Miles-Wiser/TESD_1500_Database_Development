<?php
    $cookiesQty = $_POST['cookieQty'];
    $milkQty = 0;
    $isMilk = false;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Mouse Thanks You! But....</title>
</head>

<body>
    <h1>Mouse Says: "Thank You!"</h1>
    <table>
        <tr>
            <th>Item</th>
            <th>Qty</th>
        </tr>
        <?php
        echo '<tr>';
        echo '<td>Cookies</td>';
        echo "<td>$cookiesQty</td>";
        echo '</tr>';
        if ($isMilk) {
            echo '<tr>';
            echo '<td>Milk</td>';
            echo "<td>$milkQty</td>";
            echo '</tr>';
        } else 
        ?>
    </table>
</body>

</html>