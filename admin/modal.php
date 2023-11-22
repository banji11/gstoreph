<?php
            $servername = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "user_ccount";

            $conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);

            $sql = "SELECT * from userdata";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()){
                echo "<tr>
                    <td>" . $row["username"] . "</td>
                    <td>" . $row["password"] . "</td>
                    </tr>"; 
            }
        ?>
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
                <li><a href="growsery_adminside.html">Dashboard</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="listofuser.html">List of Users</a></li>
                <div class="dropdown">
                    <li class="dropbtn"><a href="#">Products</a></li>
                    <div class="dropdown-content">
                        <a href="frozengoods.html">Frozen Goods</a>
                        <a href="breads.html">Breads</a>
                       <a href="breakfast.html">Breakfast Meals</a>
                       <a href="cannedgoods.html">Canned Goods</a>
                       <a href="snacks.html">Snacks</a>
                       <a href="drinks.html">Drinks</a>
                       <a href="laundry.html">Laundry Care</a>
                       <a href="selfcare.html">Self Care</a>
                       <a href="homecare.html">Home Care Products</a>
                    </div>
                </div>
                <li><a href="storelocation.html">Store Locations</a></li>
                <li><a href="promoevent.html">Promo & Events</a></li>
            </ul>
        </navi>
    </body>
    <div class="tablelist">
        <table>
            <tr>
                <th> ID </th>
                <th> Last_Name </th>
                <th> First_Name </th>
                <th> Middle_Name </th>
                <th> Email </th>
                <th> Contact_Number </th>
                <th> User_Name </th>
                <th> Password </th>
                <th> Action </th>
            </tr>
            <tr>
                <td>  </td>
                <td> </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td> <button onclick="document.getElementById('modal').style.display='block'"> Add </button> <button> Edit </button> <button> Delete </button> </td>
            </tr>
            <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td> <button onclick="document.getElementById('modal').style.display='block'"> Add </button> <button> Edit </button> <button> Delete </button> </td>
            </tr>
            <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td> <button onclick="document.getElementById('modal').style.display='block'"> Add </button> <button> Edit </button> <button> Delete </button> </td>
            </tr>
            <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td> <button onclick="document.getElementById('modal').style.display='block'"> Add </button> <button> Edit </button> <button> Delete </button> </td>
            </tr>
            <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td> <button onclick="document.getElementById('modal').style.display='block'"> Add </button> <button> Edit </button> <button> Delete </button> </td>
            </tr>
            <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td> <button onclick="document.getElementById('modal').style.display='block'"> Add </button> <button> Edit </button> <button> Delete </button> </td>
            </tr>
            <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td> <button onclick="document.getElementById('modal').style.display='block'"> Add </button> <button> Edit </button> <button> Delete </button> </td>
            </tr>
        </table>
    </div>

        <div id="modal" class="modal-container">
            <div class="modal-content">
                <form action="" class="form">
                    <span onclick="document.getElementById('modal').style.display='none'" class="exit-button pos-absolute">x</span>
                    <th><b> Add Account Form </b></th>
                    <br><br>
                    <p><b>First Name</b> <input type="text" name="fname" placeholder="First name" required></p>
                    <br> 
                    <p><b>Last Name</b><input type="text" name="lname" placeholder="Last name" required></p>
                    <br>
                    <p><b>Middle Name</b><input type="text" name="lname" placeholder="Last name" required></p>
                    <br>
                    <p><b>Email</b><input type="email" name="email" placeholder="Email Address" required></p>
                    <br>
                    <p><b>Contact Number</b> <input type="number" name="number" placeholder="Contact Number" required></p>
                    <br>
                    <p><b>User Name</b><input type="text" name="username" placeholder="Username" required></p>
                    <br>
                    <p><b>Password</b><input type="text" name="password" placeholder="Password" required></p>
                    <br>
                    <input class="button" type="submit" value="Submit">
                </form>
            </div>
        </div>
</html>