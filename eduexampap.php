<?php

session_start();
if(!isset($_SESSION['name'])){
	header('location:edulogin.php');
}
$con = mysqli_connect('localhost','root','project123');
mysqli_select_db($con,'quizdbase');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="container">


		<h1 class="text-center text-primary"><center>EXAM'S QUESTION PAPER </center></h1>

<center><h2 class="text-center text-success"> Welcome  <?php echo $_SESSION['name']; ?></h2></center>
<div class ="col-lag-8" m-auto d-block>
	
	<div class="card">
	<center><h3 class="text-center card-header"> Welcome  <?php echo $_SESSION['name']; ?> you have to select only one out of 4 questions. Best of Luck: </h3></center>
</div><br>
<form action ="check.php" method="post">

<?php

for($i=1;$i<6;$i++){

$q="select * from questions where qid = $i";
$query = mysqli_query($con,$q);

while($rows = mysqli_fetch_array($query)){
	?>

	<div class="card">
	<h4 class="card-header"> <?php echo $rows['question'] ?> </h4>

	<?php
    
    $q="select * from answers where ans_id = $i";
$query = mysqli_query($con,$q);

while($rows = mysqli_fetch_array($query)){
	?>
	<div class="card-body">
	<input type="radio" name="anscheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>">
	 <?php echo $rows['answer']; ?>

	</div>



	


	<?php
}
}
}

?>

<input type="submit" name="submit" class= "btn btn-success m-auto d-block">
</form>
</div><br><br>
<div class="m-auto d-block">
<a href="edulogin.php" class="btn btn-primary"> LOGOUT </a>
</div><br>
	<h5 class ="text-center"> @2021 by SabitaDevloper</h5>
	
</div><br><br><div>

</body>
</html>
