<?php
  $document_root = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mouse's Cookie Fundraiser</title>
    <style>
        body {width: 85%; margin: 10px auto;
             font-family: 'Trebuchet MS', 'Lucida Sans', Arial, sans-serif;}
    </style>
</head>

<body>
    <h1>Mouse's Cookie Fundraiser</h1>
    <h2>Donation Orders</h2>

    <?php
        @$donation = fopen("$document_root/donation.txt", "rb");
        flock($donation, LOCK_SH);

        if (!$donation) {
            echo "<p><strong>No orders pending.<br />
                  Please try again later.</strong></p>";
            exit;
        }

        while (!feof($donation)) {
            $order= fgets($donation);
            echo htmlspecialchars($order)."<br />";
        }
   
        flock($donation, LOCK_UN); // release read lock
        fclose($donation);
    ?>
</body>
</html>