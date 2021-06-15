<!DOCTYPE html>
<html>
<head>
	<title>Register farm for export</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	<style type="text/css">
		body {
     background: url(z.jpg) fixed;
    background-size: cover;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}
	</style>
</head>
<body>
	<div class="container">
            <form class="form-horizontal" role="form" method="POST" action="#">
                <h2>Registration</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="firstName" placeholder="First Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email"  name="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Detection</label>
                    <div class="col-sm-9">
                        <input type="number" name="Detection" id="password" placeholder="Detection" class="form-control">
                    </div>
                </div>
               
       
                
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" name="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control">
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label">Farm </label>
                    <div class="col-sm-9">
                        <input type="number"  name="farm" id="height" placeholder="Please write your Farm in acre" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="radiob" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="radiob" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->

        	

</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $firstName=$_POST["firstName"];
     $lastName=$_POST["lastName"];
      $email=$_POST["email"];
      $farm=$_POST["farm"];
     
    
      $Detection=$_POST["Detection"];
     $phoneNumber=$_POST["phoneNumber"];
      $radiob=$_POST["radiob"];
      
      $conn=mysqli_connect("localhost","root","","kdapexport");
      if($conn)
      {
      	$sql="INSERT INTO registerexport VALUES('$firstName','$lastName','$farm','$email','$password','$Detection','$phoneNumber','$radiob')";
      	//$sql="INSERT INTO Farmer VALUES('aarti','lastName',1,'aarti@gmail.com',123,123,1-12-2001,9823319807,'female')";

      	if(mysqli_query($conn,$sql))
      	{
      		echo "<font color='green' size='3'> Farmer Register sucessfully for export you will able to know if you are procced further or not</font>";
      	}
      	else
      	{
      		echo "error in insertion".$conn->error;
      	}
      }
      else
      {
      	echo "error in connection";
      }
}
else
{

}




?>