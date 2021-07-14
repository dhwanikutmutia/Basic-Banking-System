<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transaction History | Banking System</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300&display=swap" rel="stylesheet">
</head>

<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<div class="container-fluid">
    		<a class="navbar-brand" href="#">Banking System</a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    		</button>

	    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	      		<ul class="navbar-nav ml-auto">
	        		<li class="nav-item">
	        		  <a class="nav-link" aria-current="page" href="index.php">Home</a>
	        		</li>
	        		<li class="nav-item">
	        		  <a class="nav-link" href="customer.php">Customers</a>
	        		</li>
	       			<li class="nav-item">
	        		  <a class="nav-link" href="transfermoney.php">Transfer Money</a>
	        		</li>
	        		<li class="nav-item">
	         		  <a class="nav-link active" href="transactionhistory.php">Transaction History</a>
	        		</li>
	        	</ul>
	    	</div>
  		</div>
	</nav>
	<!-- navbar end -->

	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div>
	    <table class="table table-hover table-striped table-condensed table-bordered">
	        <thead>
	            <tr>
	                <th>Sr No.</th>
	                <th>Sender</th>
	                <th>Receiver</th>
	                <th>Amount</th>
	                <th>Date & Time</th>
	            </tr>
	        </thead>
	        <tbody>
	        <?php
	            include 'config.php';
	            $sql ="select * from transaction";
	            $query =mysqli_query($con, $sql);
	            while($rows = mysqli_fetch_assoc($query))
	            {
	        ?>
	            <tr>
	            <td><?php echo $rows['id']; ?></td>
	            <td><?php echo $rows['sender']; ?></td>
	            <td><?php echo $rows['receiver']; ?></td>
	            <td><?php echo $rows['balance']; ?> </td>
	            <td><?php echo $rows['datetime']; ?> </td>
	                
	        <?php
	            }
	        ?>
	        </tbody>
	    </table>
    </div>
</div>

<footer>
	<p class="p-3 bg-dark text-white text-center" style="margin-top: 211px; margin-bottom: 0px;">Designed by Dhwani 	Kutmutia <br> <br>Incase of any query you can contact me</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>