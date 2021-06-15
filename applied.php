
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		background-image: url(x.jpg);
		background-size: cover;;
		background-repeat: no-repeat;
	}
</style>
	</head>
<body>
	<h5 >Farmer register for export</h5>
	<?php 
     session_start();

	$conn=mysqli_connect("localhost","root","","kdapexport");

      if($conn)
      {
      	$sql="SELECT * FROM registerexport ";
      	$m=mysqli_query($conn,$sql);

        if(mysqli_num_rows($m)>0)
      	    {?>
      		<table class="table table-striped ">
  	<thead class="thead-dark">
    <tr>

      <th scope="col">Firstname</th>
      <th scope="col">lastname</th>
      <th scope="col">farm</th>
      <th scope="col">email</th>
       <th scope="col">Detection</th>
      <th scope="col">phonenumber</th>
       <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>

      		<?php
      		while($row=mysqli_fetch_assoc($m))
      		{
      			$email=$row["email"]?> <tr >

   <td>   <?php echo $row["firstName"] ?></td>
   <td>  <?php echo $row["lastname"] ?></td>
  <td>    <?php echo $row["farm"] ?></td>
    <td>    <?php echo $row["email"] ?></td>
    <td>    <?php echo $row["Detection"] ?></td>
    <td>    <?php echo $row["phonenumber"] ?></td>
     <td> <form action="#" method="POST" > <button name="accept" class="btn btn-primary">Approved</button></form></td>
    </tr>
    
       
  </tbody>
</table>
      			
      			<?php
      			if(isset($_POST['accept']))
      			{
      				$select="select * from registerexport where email='$email'";
      			$m=mysqli_query($conn,$select);
      			if(mysqli_num_rows($m)==1)
      	    	{while($row=mysqli_fetch_assoc($m))
      		{
            $firstName=$row["firstName"];
      		
      			$lastname=$row["lastname"];
            $password=$row["password"];
              $email=$row["email"];
      			$Detection=$row["Detection"];
      			$farm=$row["farm"];
      			$phoneNumber=$row["phonenumber"];
            $radiob=$row["radiob"];
      			$sql="INSERT INTO Approvedexport VALUES('$firstName','$lastname','$farm','$email','$password','$Detection','$phoneNumber','$radiob')";
      			if(mysqli_query($conn,$sql))
      			{
      				
      				$sql1="DELETE FROM registerexport where email='$email'";
      				mysqli_query($conn,$sql1);
      			}
      			else
      			{
      				echo "error hhh".$conn->error;
      			}
      		}

      			}

      			}
      			}
      		}

      		

      	}
     
     





?>

</body>
</html>