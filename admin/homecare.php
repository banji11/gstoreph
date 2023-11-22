<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="gadmstyle.css">
        <link rel="stylesheet" href="tablestyleforhm&pc.css">
        <link rel="stylesheet" href="tablesmodal.css">
        <script src="https://kit.fontawesome.com/375ce6e680.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="head">
            <h2>GROWSERY</h2>
            <p>Helps you to eme eme </p>
         </div>
        <navi class="nav-content">
            <div class="profile-holder">
                <div class="profile">
                    
                </div>
                    <p> Admin_Keyt </p>
            </div>
            <ul class="lists">
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="newprofile.html"> Profile</a></li>
                <li><a href="listofuser.php">List of Users</a></li>
                <div class="dropdown">
                    <li class="dropbtn"><a href="#">Products</a></li>
                    <div class="dropdown-content">
                        <a href="frozengoods.php">Frozen Goods</a>
                        <a href="breads.php">Breads</a>
                       <a href="breakfast.php">Breakfast Meals</a>
                       <a href="cannedgoods.php">Canned Goods</a>
                       <a href="snacks.php">Snacks</a>
                       <a href="drinks.php">Drinks</a>
                       <a href="laundry.php">Laundry Care</a>
                       <a href="selfcare.php">Self Care</a>
                       <a href="homecare.php">Home Care Products</a>
                    </div>
                </div>
                <li><a href="storelocation.html">Store Locations</a></li>
                <li><a href="promoevent.html">Promo & Events</a></li>
            </ul>
        </navi>
    </body>

    <div class="tablelist">
        <div class="add-container">
            <p> Home Care </p>
            <button onclick="document.getElementById('modal').style.display='block'"> Add</button>
        </div>
        <table class="table-content">
            <tr>
                <th> Brand </th>
                <th> Item_Name</th>
                <th> Quantity </th>
                <th> Expiration_Date </th>
                <th> Action </th>
            </tr>

            <?php
                $connection = new mysqli("localhost", "root", "", "growsery");

                $sql = "SELECT * FROM `homecare`";
                $result = $connection->query($sql);

                while($row = $result->fetch_assoc()){
                    echo "<tr>
                    <td> ".  $row["Brand"] ." </td>
                    <td> ".  $row["Item_Name"] ." </td>
                    <td> ".  $row["Quantity"] ." </td>
                    <td> ".  $row["Expiration_Date"] ." </td>
                    <td> <button> Edit </button> <button formaction='del.php'> Delete </button> </td>
                </tr>";
                }
            ?>

            <!-- <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td> <button> Edit </button> <button> Delete </button> </td>
            </tr>
             -->
        </table>
    </div>
    <div id="modal" class="modal-container">
        <div class="modal-content">
            <form action="addproducthc.php" class="form" method="POST">
                <span onclick="document.getElementById('modal').style.display='none'" class="exit-button pos-absolute">x</span>
                <div class="head">
                    <th><b> Add Product </b></th>
                </div>
                <br>
                <p class="labels"><b> Brand</b> <input class="inputs" type="text" name="brnd" placeholder="Brand" required></p>
                <br> 
                <p class="labels"><b> Item_Name</b><input class="inputs" type="text" name="iname" placeholder="Item_Name" required></p>
                <br>
                <p class="labels"><b> Quantity</b><input class="inputs" type="number" name="quan" placeholder="Quantity" required></p>
                <br>
                <p class="labels"><b> Expiration_Date</b><input  class="inputs" type="date" name="expd" placeholder="Expiration_Date" required></p>
                <br>
                <input class="button" type="submit" value="Submit">
            </form>
        </div>
    </div>
</html>