<?php
require "page.php";
require_once "numberFormatException.php";

try {
    if (!is_numeric($marriage = $_POST['The_Modest_Marriage'])) {
        throw new numberFormatException("No Number Entered.");
    }
} catch (numberFormatException $e) {
    echo $e->__toString();
}

try {
    if (!is_numeric($uncle = $_POST['The_Scientist\'s_Uncle'])) {
        throw new numberFormatException("No Number Entered.");
    }
} catch (numberFormatException $e) {
    echo $e->__toString();
}

try {
    if (!is_numeric($infinity = $_POST['Into_the_Boisterous_Infinity'])) {
        throw new numberFormatException("No Number Entered.");
    }
} catch (numberFormatException $e) {
    echo $e->__toString();
}

try {
    if (!is_numeric($praise = $_POST['A_Theory_of_Praise'])) {
        throw new numberFormatException("No Number Entered.");
    }
} catch (numberFormatException $e) {
    echo $e->__toString();
}


    
    
const marriagePrice = 23.99;
const unclePrice = 12.99;
const infinityPrice = 15.99;
const praisePrice = 17.99;

$price = marriagePrice * $marriage + unclePrice * $uncle + infinityPrice * $infinity
        + praisePrice * $praise;

$arrPurchase = ['The_Modest_Marriage' => $marriage, 'The_Scientist\'s_Uncle' => $uncle,
                'Into_the_Boisterous_Infinity' => $infinity, 'A_Theory_of_Praise' => $praise];

// Orginizes purchase in "purchase.txt"
$outputstring;
foreach ($arrPurchase as $key => $value) {
    if (!$value)
        $value = 0;
    $outputstring = "$outputstring\t$value $key";
}
$outputstring = "$outputstring\n";

// set root dir
$document_root = $_SERVER['DOCUMENT_ROOT'];

$page = new Page;
$page->DisplayHead();
?>

<table>
    <tr>
        <th>Book</th>
        <th>Qty</th>
    </tr>
    <?php
        // put all purchase items into a table
        foreach ($arrPurchase as $key => $value) {
            echo '<tr>';
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo '</tr>';
        }
    ?>
    <tr>
        <td>Price</td>
        <td>$<?=$price;?></td>
    </tr>
</table>

<!-- Open file for appending -->
<?php

    $purchase = fopen("purchase.txt", "ab");
    if (!$purchase) {
        echo "<p><strong> Your order could not be processed at this time.
              Please try again later.</strong></p>";
        exit;
    }
    flock($purchase, LOCK_EX);
    fwrite($purchase, $outputstring, strlen($outputstring));
    flock($purchase, LOCK_UN);
    fclose($purchase);

      $page->DisplayFoot();
?>