<?php
    $connection = new mysqli("localhost", "root", "", "growsery");
 
    if($connection->connect_error){
        echo "Connection failed";
    }else{
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $middlename = $_POST['mname'];
        $email = $_POST['email'];
        $contactnum = $_POST['number'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];
        
        if(empty($firstname)){
            echo "firstname must not be blank";
        }else if(empty($lastname)){
            echo "lastname must not be blank";
        }else if(empty($middlename)){
            echo "middename must not be blank";
        }else if(empty($email)){
            echo "email must not be blank";
        }else if(empty($contactnum)){
            echo "contact num must not be blank";
        }else if(empty($username)){
            echo "username must not be blank";
        }else if(empty($password)){
            echo "password must not be blank";
        }else{
            $sql = "INSERT INTO `list of users` (`Last_Name`, `First_Name`, `Middle_Name`, `Email`, `Contact_Number`, `User_Name`, `Password`, `User_Type`)
            VALUES ('$lastname', '$firstname', '$middlename', '$email', '$contactnum', '$username', '$password', '$usertype')";

            if($result = $connection->query($sql) == TRUE){
                header("Location: listofuser.php");
            }else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }
        }
        $connection->close();
    }
    
?>