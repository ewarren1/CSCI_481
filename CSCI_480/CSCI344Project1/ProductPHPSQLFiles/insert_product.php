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
    
    $sql = "INSERT INTO Product(idProduct, productName, partNumber, productLabel, startingInventory, invertoryRecieved, inventoryShipped, inventoryOnHand, price_Per_Unit)
             VALUES('$idProduct', '$productName', '$partNumber', '$productLabel', '$startingInventory', $invertoryRecieved, $inventoryShipped, '$inventoryOnHand', '$price_Per_Unit')";
    
    if(!mysqli_query($conn, $sql)) {
        echo "An error occured when inserting the product";
    } else {
        echo "Product inserted successfully.";
    }

    mysqli_close($conn);
?>