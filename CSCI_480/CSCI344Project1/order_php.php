<?php
  session_start();
    
    $conn = mysqli_connect("avl.cs.unca.edu", "ewarren1", "sql4you", "ewarren1DBCSCI338") or die("Connection failed: ");
    
    
    $idProduct = $_POST['idProduct'];
    $productQuantity = $_POST['productQuantity'];
    //$date = date(Y-m-d); 
    
    $sql = "INSERT INTO Orders(idProduct, amountShipped, idAccount)
             VALUES('$idProduct', '$productQuantity', '5')";
    
    if(!mysqli_query($conn, $sql)) {
        echo "An error occured when inserting the product";
    } else {
        echo "Product inserted successfully.";
    }
   // mysqli_close($conn);
?>
