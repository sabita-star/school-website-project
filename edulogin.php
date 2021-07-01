<!DOC TYPE html>
<html>
<body>
<head>
	<title></title>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <style>
   body{
	   background-image: url("examimg.jpeg");
	   background-repeat: no-repeat;
	   background-size: 100%;

	   </style>
	   </head>
	   <div class="container">
	   	<div class="row">
	   		<div class="col">
<center>
<B><h2 align ="center">WELCOME TO EXAMINATION FORM<h2></B>
  <title><login></title></head>

<h3 align="right">Student Login Form!</h3>

<form action="eduval.php" method="post">
	<table border="3" align="right" width="300" height="150">

	
<tr>
<td><label>Name:</label></td>
         <td><input type="text" name="name"></td>
</tr>
<tr>

<td><label>Password</label></td>
        <td><input type="text" name="password" ></td>
      </tr>
 </div>

<tr> <B><td colspan="5" align="center"><button> <input type="submit" class = "btn btn-primary" name="login" value="login"></button></td></B>
       

</tr>

  
</body>   
	   
</table>
</form>
</html>

<?php

$con = mysqli_connect('localhost','root','project123');
 mysqli_select_db($con, 'quizdbase');
 
 
 if(isset($_POST['login']))
{
	 $name = $_POST['name'];
	 
	 $password = $_POST['password'];
	 
	 if($name=='')
	 {
		 echo "<script>alert('please enter the name')</script>";
		 exit();
	 }
	 
	 if($password=='')
	 {
		 echo "<script>alert('please enter the password')</script>";
		 exit();
	 }
    
	
     else
		 $query="INSERT INTO edusign (name,  password) VALUES ('$name', '$password')";
	  mysqli_query($con,$query);
		  
}
	
?>