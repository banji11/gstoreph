<?php
    $connection = new mysqli("localhost", "root", "", "growsery");

    if($connection->connect_error){
        echo "Connection Failed!";
    }else{
        $brand = $_POST  ['brnd'];
        $itemname = $_POST ['iname'];
        $quantity = $_POST ['quan'];
        $expirationdate = $_POST ['expd'];

        if(empty($brand)) {
            echo "Brand must not be blank";
        } else  if(empty($itemname)) {
            echo "Item_Name must not be blank";
        } else  if(empty($quantity)) {
            echo "Quantity must not be blank";
        } else  if(empty($itemname)) {
            echo "Expiration_Date must not be blank";
        } else{
            
            $sql = "INSERT INTO `homecare` (`Brand`, `Item_Name`, `Quantity`, `Expiration_Date`)
                    VALUES ('$brand', '$itemname', '$quantity', '$expirationdate')";

                if($result = $connection->query($sql) == TRUE){
                        echo "Product has been added succesfully!";
                    }else{
                        echo "Error: " . $sql . "<br>" . $connection->error;
                    }
        }
        $connection->close();
     }
?>
