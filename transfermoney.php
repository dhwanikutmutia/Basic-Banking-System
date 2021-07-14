<!DOCTYPE html>
<html>
<head>
	<title>Transfer Money | Banking System</title>
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
	        		  <a class="nav-link active" href="transfermoney.php">Transfer Money</a>
	        		</li>
	        		<li class="nav-item">
	         		  <a class="nav-link" href="transactionhistory.php">Transaction History</a>
	        		</li>
	        	</ul>
	    	</div>
  		</div>
	</nav>
	<!-- navbar end -->

	<!-- Table code -->
	<div class="container">
		<h3 style="text-align: center; margin-top: 50px;"><b>Click on Transfer button to proceed</b></h3> 
		<div class="main">
			<div class="center">
				<div class="table-responsive">
					<table>
						<thead>
							<tr>
								<th><b>Sr No.</b></th>
								<th><b>Name</b></th>
								<th><b>Email</b></th>
								<th><b>Balance</b></th>
								<th><b>Transfer</b></th>
							</tr>
						</thead>
						<tbody>
							<?php
								include 'config.php';
								$sqlquery = " select * from customers";
								$query = mysqli_query($con, $sqlquery);
								$nums = mysqli_num_rows($query);
								
								while($result = mysqli_fetch_array($query)){
							?>
							<tr>
								<td><?php echo $result['id']; ?></td>
								<td><?php echo $result['name']; ?></td>
								<td><span class="email-style"><?php echo $result['email']; ?></span> </td>
								<td><?php echo $result['balance']; ?></td>
								<td><a href="transfer.php?id= <?php echo $result['id'] ;?>"><button style="background-color: #2f4f4f; color:#fff; padding: 5px; border-radius: 5px;">Transfer</button></a></td>
							</tr>

							<?php
								}
							?>
						</tbody>
					</table>
				</div> 	
			</div>
		</div>
	</div>
	<!-- End of table code -->


	<footer>
		<p class="p-3 bg-dark text-white text-center" style="margin-top: 280px; margin-bottom: 0px;">Designed by Dhwani Kutmutia <br> <br>Incase of any query you can contact me</p>
	</footer>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

