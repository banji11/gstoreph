<?php

include "config.php";
    
	$ervername="localhost";
	$username = "root";
	$password ="";
	$dbname ="growseryy";
	
	$conn = new mysqli ($ervername, $username, $password, $dbname);
	
	if ($conn -> connect_error){
		
		die ("Connection Failed". $conn->connect_error);
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="gadmstyle.css">
        <link rel="stylesheet" href="tryprofile.css">
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

    <form action="" method="POST">
    <div class="tablelist">
        <table>
            <tr>
                <th> ID </th>
                <td> <input type="number"> </input> </td>
            </tr>
            <tr>
                <th> Last_Name </th>
                <td> <input type="text"> </input> </td>
            </tr>
            <tr>
                <th> First_Name </th>
                <td> <input type="text"> </input> </td>
            </tr>
            <tr>
                <th> Middle_Name </th>
                <td> <input type="text"> </input> </td>
            </tr>
            <tr>
                <th> Email </th>
                <td> <input type="email"> </input> </td>
            </tr>
            <tr>
                <th> Contact_Number </th>
                <td> <input type="number"> </input> </td>
            </tr>
            <tr>
                <th> User_Name </th>
                <td> <input type="text"> </input> </td>
            </tr>
            <tr>
                <th> Password </th>
                <td> <input type="text"> </input> </td>
            </tr>
            <tr>
                <th> User_type </th>
                <td> <input type="text"> </input> </td>
            </tr>
        
        </table>

        <button> Submit </button>
    </div>
</html>