<!DOCTYPE html>
<html>
<head>
	<title>create4B</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>body {
    background-image: url(o.jpg);
    background-size: cover;
    background-repeat: no-repeat;;
}
#login {
	-webkit-perspective: 1000px;
	-moz-perspective: 1000px;
	perspective: 1000px;
	margin-top:50px;
	margin-left:30%;
}
.login {
	font-family: 'Josefin Sans', sans-serif;
	-webkit-transition: .3s;
	-moz-transition: .3s;
	transition: .3s;
	-webkit-transform: rotateY(40deg);
	-moz-transform: rotateY(40deg);
	transform: rotateY(40deg);
}
.login:hover {
	-webkit-transform: rotate(0);
	-moz-transform: rotate(0);
	transform: rotate(0);
}
.login article {
	
}
.login .form-group {
	margin-bottom:17px;
}
.login .form-control,
.login .btn {
	border-radius:0;
}
.login .btn {
	text-transform:uppercase;
	letter-spacing:3px;
}
.input-group-addon {
	border-radius:0;
	color:#fff;
	background:#f3aa0c;
	border:#f3aa0c;
}
.forgot {
	font-size:16px;
}
.forgot a {
	color:#333;
}
.forgot a:hover {
	color:#5cb85c;
}

#inner-wrapper, #contact-us .contact-form, #contact-us .our-address {
    color: #1d1d1d;
    font-size: 19px;
    line-height: 1.7em;
    font-weight: 300;
    padding: 50px;
    background: #fff;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    margin-bottom: 100px;
}
.input-group-addon {
    border-radius: 0;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
    color: #fff;
    background: #f3aa0c;
    border: #f3aa0c;
        border-right-color: rgb(243, 170, 12);
        border-right-style: none;
        border-right-width: medium;
}
	</style>
</head>
<body>
	<div class="col-md-4 col-md-offset-4" id="login">
						<section id="inner-wrapper" class="login">
							<article>
								<form action="#" method="POST" enctype="multipart/form-data">
									<h5>Apply for 4B</h5>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"> </i></span>
											<input type="text" name="name" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
											<input type="text"name="location" class="form-control" placeholder="location">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="text" name="farm" class="form-control" placeholder="farm">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="text" name="email" class="form-control" placeholder="email">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="password" name="password" class="form-control" placeholder="password">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="file" name="file" class="form-control" placeholder="upload ferfara utara">
										</div>
									</div>
									  <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
								</form>
							</article>
						</section></div>

</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $Name=$_POST["name"];
     $location=$_POST["location"];
      $farm=$_POST["farm"];
     $email=$_POST["email"];
     $password=$_POST["password"];
     $pname=rand(1000,10000)."-".$_FILES["file"]["name"];
     $tname=$_FILES["file"]["tmp_name"];
     $uploads_dir="/images";
     move_uploaded_file($tname,$uploads_dir.'/'.$pname);
     


      $conn=mysqli_connect("localhost","root","","kdapexport");
      if($conn)
      {
      	$sql="INSERT INTO Create4B VALUES('$Name','$location','$farm','$pname','$email','$password')";
      	//$sql="INSERT INTO Farmer VALUES('aarti','lastName',1,'aarti@gmail.com',123,123,1-12-2001,9823319807,'female')";

      	if(mysqli_query($conn,$sql))
      	{
      		echo "<font color='green' size='3'>Apply sucessfully for 4B</font>";
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