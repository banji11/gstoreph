<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="gadmstyle.css">
        <link rel="stylesheet" href="trylistofuser.css">
        <link rel="stylesheet" href="modal.css">
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
            <p> List of Users</p>
            <button onclick="document.getElementById('modal').style.display='block'"> Add </button> 
         </div>
        <table class="table-content">
            <tr>
                <th> ID </th>
                <th> Last_Name </th>
                <th> First_Name </th>
                <th> Middle_Name </th>
                <th> Email </th>
                <th> Contact_Number </th>
                <th> User_Name </th>
                <th> Password </th>
                <th> User_Type</th>
                <th> Action </th>
            </tr>
            
            <?php
                $connection = new mysqli("localhost", "root", "", "growsery");

                $sql = "SELECT * FROM `list of users`";
                $result = $connection->query($sql);

                while($row = $result->fetch_assoc()){
                    echo "<tr>
                    <td> ".  $row["ID"] ." </td>
                    <td> ".  $row["Last_Name"] ." </td>
                    <td> ".  $row["First_Name"] ." </td>
                    <td> ".  $row["Middle_Name"] ." </td>
                    <td> ".  $row["Email"] ." </td>
                    <td> ".  $row["Contact_Number"] ." </td>
                    <td> ".  $row["User_Name"] ." </td>
                    <td> ".  $row["Password"] ." </td>
                    <td> ".  $row["User_Type"] ." </td>
                    <td> <button> Edit </button> <button formaction='del.php'> Delete </button> </td>
                </tr>";
                }
            ?>
            
            <!-- <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td> <button onclick="document.getElementById('modal').style.display='block'"> Add </button> <button> Edit </button> <button> Delete </button> </td>
            </tr> -->
        </table>
        <br><br>
        
        

    </div>

        <div id="modal" class="modal-container">
            <div class="modal-content">
                <form action="adduser.php" class="form" method="POST">
                    <span onclick="document.getElementById('modal').style.display='none'" class="exit-button pos-absolute">x</span>
                    <th><b> Create New Account </b></th>
                    <br><br>
                    <p><b>First Name</b> <input class="inputs" type="text" name="fname" placeholder=" First name" required></p>
                    <br> 
                    <p><b>Last Name</b><input class="inputs" type="text" name="lname" placeholder=" Last name" required></p>
                    <br>
                    <p><b>Middle Name</b><input class="inputs" type="text" name="mname" placeholder=" Middle name" required></p>
                    <br>
                    <p><b>Email</b><input class="inputs" type="email" name="email" placeholder=" Email Address" required></p>
                    <br>
                    <p><b>Contact Number</b> <input class="inputs" type="number" name="number" placeholder=" Contact Number" required></p>
                    <br>
                    <p><b>User Name</b><input class="inputs" type="text" name="username" placeholder=" Username" required></p>
                    <br>
                    <p><b>Password</b><input class="inputs" type="text" name="password" placeholder=" Password" required></p>
                    <br>
                    <p><b>User Type</b>
                        <select class="inputs" id="usertype" name="usertype" >
                            <option value="Admin"> Admin</option>
                            <option value="Staff"> Staff</option>
                            <option value="Customer"> Customer</option>
                          </select>
                    </p>
                    <br>
                    <input class="button" type="submit" value="Submit" name="submit">
                </form>
            </div>
        </div>
</html>