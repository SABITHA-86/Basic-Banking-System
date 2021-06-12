<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<style>
      body { 
         background-color:#6b2955;
      }
      h3{
           color: white;
      }
      tr{
          color: white;
      }
      td{
          color: white;
      }
</style>
<body>

<?php
  include 'navbar.php';
?>

	<div class="container">
        <h3 class="text-center pt-4">TRANSACTION HISTORY</h3>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr><h4>
                <th class="text-center">S.NO.</th>
                <th class="text-center">SENDER</th>
                <th class="text-center">RECEIVER</th>
                <th class="text-center">AMOUNT</th>
                <th class="text-center">DATE & AMOUNT</th></h4>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr><h4>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
             </h4></tr>   
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
</body>
</html>