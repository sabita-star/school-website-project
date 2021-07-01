<?php
include('./schoolhead/header.php');
?>
          </head>
<body>
	<div class="container">
		<br>
		<h1 class="text-center text-white bg-primary">Students's Achievement List:</h1>
		
		
		<table class="table table-bordered table-striped table-hover text-center">
			<thead class="bg-warning text-white">
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Awarded</th>
				<th scope="col">Profile Photo.</th>
			</thead>
			<tbody>
				<?php
				$con = mysqli_connect("localhost","root","project123");
                  mysqli_select_db($con, 'quizdbase');
                  if(isset($_POST['submit'])){
                  	$username=$_POST['username'];
                  	$award = $_POST['award'];
                  	$files = $_FILES['file'];
                  
	 

		 
		 
                  	print_r($username);
                  	echo "<br>";
                  	//print_r($files);
                  	$filename = $files['name'];
                  	//print_r($filename);
                  	$fileerror = $files['error'];
                  	$filetmp = $files['tmp_name'];
                  	$fileext = explode('.',$filename);
                  	$filecheck = strtolower(end($fileext));
                  	$fileextstored = array('png','jpg','jpeg');
                  	if(in_array($filecheck,$fileextstored)){
                  		$destinationfile = 'image/'.$filename;
                  		move_uploaded_file($filetmp,$destinationfile);
                  	$q = "INSERT INTO `record`( `username`,`award`,`image`) VALUES ('$username','$award','$destinationfile')";
                  	$query = mysqli_query($con,$q);
                  	$displayquery = "select * from  record";
                  	$querydisplay = mysqli_query($con,$displayquery);

                  	
                  	while ($result = mysqli_fetch_array($querydisplay)){
                  		?>
                   <tr>
                   	<td> <?php echo $result['id']; ?> </td>
                   	<td> <?php echo $result['username']; ?> </td>
                   	<td> <?php echo $result['award']; ?> </td>
                   	
                   	<td> <img src="  <?php echo $result['image']; ?>" height="230px" width="230px"> </td>
                   </tr>

                  		<?php 

                  	}


                  	}

                  }
            
				?>
			</div>
			</tbody>
	</div>
</table>


</div>
<?php

 $id=1;                
$record_qry="SELECT * FROM record";
$record_res=mysqli_query($con,$record_qry);
while($record_data=mysqli_fetch_assoc($record_res))
{
}
  ?>



</body>


<?php
include('./schoolhead/footer.php');
?>


















