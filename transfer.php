<?php 
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where id=$from";
    $query = mysqli_query($con,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from customers where id=$to";
    $query = mysqli_query($con,$sql);
    $sql2 = mysqli_fetch_array($query);
    
    if (($amount)<0)
    {
?>
    <script type="text/javascript">;
    alert("Please enter appropriate values!");  
    </script>
<?php
   	}

    else if($amount > $sql1['balance']) 
   	{
?>
    <script type="text/javascript">;
    alert("Bad Luck! Insufficient Balance");  
    </script>

<?php
	}

    else if($amount == 0)
   	{
?>
    <script type='text/javascript'>;
    alert('Please enter some amount greater than 0!');
    </script>
<?php
	}

    else {        
        //code to deduct from sender's account
        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE customers set balance=$newbalance where id=$from";
        mysqli_query($con,$sql);         

        //code to add amount in receiver's account.
        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE customers set balance=$newbalance where id=$to";
        mysqli_query($con,$sql);
                
        //code to enter the values in transaction database 
        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query=mysqli_query($con,$sql);
?>
        <script>
        alert("Successfully transfered!");
        window.location.href="transactionhistory.php";
        </script>
<?php
    $newbalance= 0;
    $amount = $newbalance;
    }  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tranaction | Banking System</title>
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
    		<a class="navbar-brand" href="transfermoney.php">Back</a>
  		</div>
	</nav>
	<!-- navbar end -->

	<!--Main code-->
 	<div class="container">
        <h2 class="text-center pt-4">Transaction</h2>

        <h4>From:</h4>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customers where id=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($con);
                }
                $rows=mysqli_fetch_array($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                </tr>
                <tr>
                    <td><?php echo $rows['id'] ?></td>
                    <td><?php echo $rows['name'] ?></td>
                    <td><?php echo $rows['email'] ?></td>
                    <td><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label>Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customers where id!=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button style="background-color: #2f4f4f; color:#fff; padding: 5px; border-radius: 5px;" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
    </div>

    <footer>
		<p class="p-3 bg-dark text-white text-center" style="margin-top: 120px; margin-bottom: 0px;">Designed by Dhwani Kutmutia <br> <br>Incase of any query you can contact me</p>
	</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>


