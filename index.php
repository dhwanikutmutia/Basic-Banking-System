<!DOCTYPE html>
<html>
<head>
	<title>Banking System</title>
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
	        		  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	        		</li>
	        		<li class="nav-item">
	        		  <a class="nav-link" href="customer.php">Customers</a>
	        		</li>
	       			<li class="nav-item">
	        		  <a class="nav-link" href="transfermoney.php">Transfer Money</a>
	        		</li>
	        		<li class="nav-item">
	         		  <a class="nav-link" href="transactionhistory.php">Transaction History</a>
	        		</li>
	        	</ul>
	    	</div>
  		</div>
	</nav>
	<!-- navbar end -->


	<!-- carousel -->
	<div id="demo" class="carousel slide" data-ride="carousel">
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="images/1.jpg" alt="Banking System" width="1100" height="400">
	      <div class="carousel-caption">
	        <h3></h3>
	        <p></p>
	      </div>   
	    </div>
	    <div class="carousel-item">
	      <img src="images/2.jpeg" alt="Banking System" width="1100" height="400">
	      <div class="carousel-caption">
	        <h3></h3>
	        <p></p>
	      </div>   
	    </div>
	    <div class="carousel-item">
	      <img src="images/3.jpg" alt="Banking System" width="1100" height="400">
	      <div class="carousel-caption">
	        <h3></h3>
	        <p></p>
	      </div>   
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>
	</div>
	<!-- end of carousel -->

	<!-- 	contact us -->
	<section class="my-5">
		<div class="py-5">
			<h2 class="text-center"> Contact Us</h2>
		</div>

		<div class="w-50 m-auto">
			<form action="bankingcontact.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" autocomplete="off" class="form-control">
				</div>

				<div class="form-group">
					<label>Email Id</label>
					<input type="text" name="email" autocomplete="off" class="form-control">
				</div>

				<div class="form-group">
					<label>Mobile</label>
					<input type="number" name="mobile" autocomplete="off" class="form-control">
				</div>

				<div class="form-group">
					<label>Comment</label>
					<textarea type="text" name="comment" autocomplete="off" class="form-control">
					</textarea>
				</div>
				<button type="submit" style="background-color: #2f4f4f; color:#fff; padding: 5px; border-radius: 5px;" >Submit</button>
			</form>
		</div>
	</section>
	<!-- end of contact us -->

	<footer>
		<p class="p-3 bg-dark text-white text-center" style="margin-top: 120px; margin-bottom: 0px;">Designed by Dhwani Kutmutia <br> <br>Incase of any query you can contact me</p>
	</footer>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>