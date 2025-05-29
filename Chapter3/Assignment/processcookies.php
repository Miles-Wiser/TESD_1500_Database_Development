<?php
    // Donated items
    $cookiesQty = $_POST['cookieQty'];
    $milkQty = $_POST['milkQty'];
    $strawQty = $_POST['strawQty'];
    $mirrorQty = $_POST['mirrorQty'];
    $scissorsQty = $_POST['scissorsQty'];
    $broomQty = $_POST['broomQty'];
    $napQty = $_POST['napQty'];
    $bookQty = $_POST['bookQty'];
    $crayonsQty = $_POST['crayonsQty'];
    $refrigeratorQty = $_POST['refrigeratorQty'];

    // All donations go into this array
    $arrDonation = ['Cookies' => $cookiesQty, 'Milk' => $milkQty, 'Straw' => $strawQty,
         'Mirror' => $mirrorQty, 'Scissors' => $scissorsQty, 'Broom' => $broomQty,
         'Nap' => $napQty, 'Book' => $bookQty, 'Crayons' => $crayonsQty, 'RefrigeratorQty' => $refrigeratorQty];

    // For when items are donated
    $date = date('H:i, jS F Y');
    // Orginizes donation in "donation.txt"
    $outputstring = "$date";
    foreach ($arrDonation as $key => $value) {
        if (!$value)
            $value = 0;
        $outputstring = "$outputstring\t$value $key";
    }
    $outputstring = "$outputstring\n";

    // set root dir
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
            // put all donation items into a table
            foreach ($arrDonation as $key => $value) {
                echo '<tr>';
                echo "<td>$key</td>";
                echo "<td>$value</td>";
            }
        ?>
    </table>

    <!-- Open file for appending -->
    <?php
        @$donation = fopen("$document_root/donation.txt", "ab");
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