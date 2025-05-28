<?php
    $products = array('Tires' => 100, 'Oil' => 10, 'Spark Plugs' => 4);
?>

<!DOCTYPE html>
<html>

<head><title>Test Page</title></head>

<body>
    <?php
        echo "<p>";
        // foreach ($products as $key => $value)
        //     echo $key.' - '.$value."<br>";
        while ($products = each($prices)) {
            echo $products['key']." - ".$products['value'];
            echo "<br />"
        }
        echo "</p>";
    ?>
</body>
</html>