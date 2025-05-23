<?php
    $cookiesQty = $_POST['cookieQty'];
    $milkQty = 0;
    $isMilk = false;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Mouse Thanks You! But....</title>
    <style>
        body {width: 85%; margin: 10px auto;
             font-family: 'Trebuchet MS', 'Lucida Sans', Arial, sans-serif;}
        table, th, td {background-color: rgb(242, 230, 245);
             border: 2px solid rgb(60, 45, 60); border-collapse: collapse;
             text-align: center;}
        table th {background-color: rgba(191, 150, 235, 0.30);}
        th, td {padding: 6px;}
    </style>
</head>

<body>
    <?php
    if ($cookiesQty <= 0)
        echo '<h1>Mouse Says: Happiness is Fleeting</h1>';
    else
        echo '<h1>Mouse Says: Thank You!</h1>';
    ?>
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