
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
	<h5 >4B to Approval</h5>
	<?php 
     session_start();

	$conn=mysqli_connect("localhost","root","","kdapexport");

      if($conn)
      {
      	$sql="SELECT * FROM Create4B ";
      	$m=mysqli_query($conn,$sql);

        if(mysqli_num_rows($m)>0)
      	    {?>
      		<table class="table table-striped ">
  	<thead class="thead-dark">
    <tr>

      <th scope="col">Name</th>
      <th scope="col">location</th>
      <th scope="col">farm</th>
      <th scope="col">email</th>
       <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>

      		<?php
      		while($row=mysqli_fetch_assoc($m))
      		{
      			$email=$row["email"]?> <tr >

   <td>   <?php echo $row["Name"] ?></td>
   <td>  <?php echo $row["location"] ?></td>
  <td>    <?php echo $row["farm"] ?></td>
    <td>    <?php echo $row["email"] ?></td>
     <td> <form action="#" method="POST" > <button name="accept" class="btn btn-primary">Approved</button></form></td>
    </tr>
    
       
  </tbody>
</table>
      			
      			<?php
      			if(isset($_POST['accept']))
      			{
      				$select="select * from create4B where email='$email'";
      			$m=mysqli_query($conn,$select);
      			if(mysqli_num_rows($m)==1)
      	    	{while($row=mysqli_fetch_assoc($m))
      		{
      			$email=$row["email"];
      			$name=$row["Name"];
      			$location=$row["location"];
      			$farm=$row["farm"];
      			$password=$row["password"];
      			$sql="INSERT INTO Approved4B values('$email','$name','$location','$farm','$password')";
      			if(mysqli_query($conn,$sql))
      			{
      				
      				$sql="DELETE FROM Create4B where email='$email'";
      				mysqli_query($conn,$sql);
      			}
      			else
      			{
      				echo "error".$conn->error;
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