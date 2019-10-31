<?php
    include('dbconnection.php');
    
    $idProduct = $_POST['idProduct'];
    
    $sql = "DELETE FROM Product WHERE `idProduct`= $idProduct";
    
    if($conn->query($sql)) {
        echo "Product deleted";
    } else {
        echo "Error occured while deleting.";
    }
    
    mysqli_close($conn);
?>