                <!--bar content-->
    <div id=header1>
    <div  class= "headr2">
        APNI DUKAAN   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <?php
                           if(isset($_SESSION['email']))
                           {echo $_SESSION['name'];
                           ?>
                          <td><a href="logout.php" ><input  id=button1 type="button" value ="LOG OUT"></a></td>
                           <td><a href="cart.php" ><input  id=button1 type="button" value ="CART"></a></td>
                           <?php

                           }
                           else
                           {
                            ?>
                       <a href="LnS.php"><input id="button1" type="button" value="LOGIN AND SIGNUP"  > </a></a> 
                           <?php
                           }
                           ?>
    </div>
    </div>

    <div id="header3">
        <div class="headr4">
       <h2>
        <br>
           <select  onchange="location = this.options[this.selectedIndex].value;">
            <option>CATEGORY</option>
            <option value="men.php">MEN</option>
            <option value="women.php">WOMEN</option>
            <option value="kids.php">KIDS</option>
            <option value="home.php">HOME</option>

</select>​
       </h2>  
       </div>       
    </div> 
<br>