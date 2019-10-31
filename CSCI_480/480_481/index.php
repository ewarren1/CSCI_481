<!DOCTYPE html>
<html lang="en">
<head>
  <title>Free and Open Point of Sale</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Welcome</h1>      
    <p>Free and Open Sourced POS</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="active"><a href="SalesPage.php">Sales</a></li>
        <li class="active"><a href="Customer.php">Customers</a></li>
        <li class="active"><a href="Reports.php">Reports</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">
  <h2>Item List</h2>
  <table class="table table-bordered">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Quantity</th>
	</tr>
	
	<?php
	
			$servername = "avl.cs.unca.edu";
			$username = "ewarren1";
			$password = "sql4you";
			$dbname = "ewarren1DBCSCI481";
			
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			
			$sql = "SELECT product_inventory_id, product_name, quanity_in_stock FROM Product";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			        echo "<tr><td>" . $row["product_inventory_id"]. "</td><td>" . $row["product_name"]. "</td><td>" . $row["quanity_in_stock"]. "</td></tr>";
			    }
			    echo "</table>";
			} else {
			    echo "0 Results";
			}
			
		//	$conn->close();
			
			?>
  </table>
</div><br></br>

<div class="d-flex justify-content-center align-items-center container ">  
   	<div class="row ">	
   	<h2>New Inventory Form</h2>
        <form method = "post" action="scripts/insertproduct.php" >
        	<div class="form-group">
          		<label for="product_name">Product Name:</label>
          		<input type="text" class="form-control" name="product_name">
        	</div>
            <div class="form-group">
              <label for="product_price">Product Price:</label>
              <input type="number" placeholder="1.00" step="0.01" 
              min="0" max="10" class="form-control" name="product_price">
            </div>
            <div class="form-group">
          		<label for="quanity_in_stock">Quanity:</label>
          		<input type="number" class="form-control" name="quanity_in_stock">
        	</div>
            <div class="form-group">
              <label for="product_description">Description:</label>
              <input type="text" class="form-control" name="description">
            </div>
            <div class="form-group">
              <label for="product_status">Status:</label>
              <input type="text" class="form-control" name="product_status">
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>   
	</div>
</div>

<footer class="container-fluid text-center">
  <p>FOSPOS Evan Warren UNCA </p>  
</footer>

</body>
</html>
