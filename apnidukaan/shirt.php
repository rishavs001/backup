<?php
require 'connection.php';
session_start();
?>



<!DOCTYPE html>
<html>
<head>
    <title>APNI DUKAAN</title>
    
    <link rel="stylesheet type="text/css" href="mystyle.css">
      <link rel = "icon" href =  "ad.jpg" type = "image/x-icon"> 
      <style type="text/css">
  </style>
 

 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     
</head>
<body>
   
      <?php
require 'header.php';

?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h3>
                        <center>SHIRTS</center>
                        <br>
  <?php
                $query = "SELECT * FROM tb_shirts ORDER BY id ASC";
                $result = mysqli_query($db, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
            <div class="col-md-4">
                <form method="POST" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                        <img src="<?php echo $row["image"]; ?>" style="width:300px;height:300px;" /><br />


                        <h4 ><?php echo $row["name"]; ?></h4>

                        <h4 >$ <?php echo $row["price"]; ?></h4>

                        <input type="text" name="quantity" value="1"  />

                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                        <?php
                           if(isset($_SESSION['email']))
                           {
                           ?>
                                <input type="submit" name="add_to_cart" style="margin-top:5px;"  value="Add to Cart" />
                           <?php

                           }
                           else
                           {
                            ?>
                                <a href="LOGIN.php"><input type="button"  style="margin-top:5px;" value="LOGIN"  > </a></a> 
                           <?php
                           }
                        ?>

                  </div><br>
                </form>
            </div>
            <?php
                    }
                }
            ?>

</h3>
 </body>
<html>