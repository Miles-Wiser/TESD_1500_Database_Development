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
        table, td, th {background-color: rgb(242, 230, 245);
             border: 2px solid rgb(60, 45, 60); border-collapse: collapse;
             text-align: center; padding: 5px 10px;}
        th {background-color: rgba(191, 150, 235, 0.30);;}
    </style>
</head>

<body>
    <h1>Mouse's Cookie Fundraiser</h1>
    <h2>Donation Orders</h2>

    <?php
        $donation= file("$document_root/donation.txt");
    
        // count the number of orders in the array
        $numDonations = count($donation);

        // Sorts orders within a minute by lowest cookie quantity, lowest milk quantity, ect.
        sort($donation);
        
        if ($numDonations == 0) {
            echo "<p><strong>No orders pending.<br />
                Please try again later.</strong></p>";
        }

        echo "<table>\n";
    //   echo "<tr>
    //           <th>Donation Date</th>
    //           <th>Cookie</th>
    //           <th>Milk</th>
    //           <th>Straw</th>
    //           <th>Mirror</th>
    //           <th>Scissors</th>
    //           <th>Broom</th>
    //           <th>Nap</th>
    //           <th>Book</th>
    //           <th>Crayons</th>
    //           <th>Refrigerator</th>
    //         <tr>";
        echo "<tr>
              <th>Donation Date</th>
              <th>Cookie</th>
              <th>Milk</th>
              <th>Straw</th>
            <tr>";
    
        for ($i = 0; $i < $numDonations; $i++) {
            //split up each line
            $line = explode("\t", $donation[$i]);
        
            // keep only the number of items ordered
            $line[1] = intval($line[1]);
            $line[2] = intval($line[2]);
            $line[3] = intval($line[3]);
            // $line[4] = intval($line[4]);
            // $line[5] = intval($line[5]);
            // $line[6] = intval($line[6]);
            // $line[7] = intval($line[7]);
            // $line[8] = intval($line[8]);
            // $line[9] = intval($line[9]);
            // $line[10] = intval($line[10]);
        
            // output each order
            // echo "<tr>
            //       <td>".$line[0]."</td>
            //       <td>".$line[1]."</td>
            //       <td>".$line[2]."</td>    
            //       <td>".$line[3]."</td>
            //       <td>".$line[4]."</td>
            //       <td>".$line[5]."</td>
            //       <td>".$line[6]."</td>
            //       <td>".$line[7]."</td>
            //       <td>".$line[8]."</td>
            //       <td>".$line[9]."</td>
            //       <td>".$line[10]."</td>
            //   </tr>";
            echo "<tr>
                <td>".$line[0]."</td>
                <td>".$line[1]."</td>
                <td>".$line[2]."</td>    
                <td>".$line[3]."</td>
            </tr>";
        }    
        echo "</table>";
    ?>
</body>
</html>