<?php
    $cookiesQty = $_POST['cookieQty'];
    $milkQty = $_POST['milkQty'];
    $date = date('H:i, jS F Y');
    $outputstring = "$date\t$cookiesQty cookies\t$milkQty milk\n";
    $document_root = $_SERVER['DOCUMENT_ROOT'];

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
            echo '<tr>';
            echo '<td>Milk</td>';
            echo "<td>$milkQty</td>";
            echo '</tr>';
        ?>
    </table>

    <!-- Open file for appending -->
    <?php
        @$donation = fopen("$document_root/Chapter2-1/donation.txt", "ab");
        if (!$donation) {
            echo "<p><strong> Your order could not be processed at this time.
                  Please try again later.</strong></p>";
            exit;
          }
   
          flock($donation, LOCK_EX);
          fwrite($donation, $outputstring, strlen($outputstring));
          flock($donation, LOCK_UN);
          fclose($donation);
    ?>
</body>

</html>