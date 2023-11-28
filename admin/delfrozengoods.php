<?php
    $connection = new mysqli("localhost", "root", "", "growsery");

    $deleting = $_POST['toDelete']; 

    $sql = "DELETE INTO `frozen` WHERE `Item_Name` = '$deleting'";

    if($result = $connection->query($sql) == TRUE){
        echo "<script>alert('Product has been deleted')</script>";
        echo "<script>window.location.href='frozengoods.php'</script>";
    }else{
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

?>