<?php
    include('dbconnection.php');
    
    $idProduct = $_POST['idProduct'];
    $productName = $_POST['productName'];
    $partNumber = $_POST['partNumber'];
    $productLabel = $_POST['productLabel'];
    $startingInventory = $_POST['startingInventory'];
    $invertoryRecieved = $_POST['invertoryRecieved'];
    $inventoryShipped = $_POST['inventoryShipped'];
    $inventoryOnHand = $_POST['inventoryOnHand'];
    $price_Per_Unit= $_POST['price_Per_Unit'];
    
    $sql = "UPDATE `Product` SET 
           `productName`='".$productName."',`partNumber`='".$partNumber."',`productLabel`= '".$productLabel."',
           `startingInventory`='".$startingInventory."',`invertoryRecieved`='".$invertoryRecieved."',
           `inventoryShipped`='".$inventoryShipped."',`inventoryOnHand`='".$inventoryOnHand."', `price_Per_Unit`= $price_Per_Unit
           WHERE `idProduct`= $idProduct";

    $result= mysqli_query($conn, $sql);
    
    if($result) {
        echo 'Product Updated';
    } else {
        echo 'Update Failed';
    }

    mysqli_close($conn);

?>