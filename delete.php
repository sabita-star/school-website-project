<?php
 $con = mysqli_connect('localhost','root','project123');
                               mysqli_select_db($con, 'quizdbase');
 
 $id = $_GET['id'];
 $deletequery = "delete from homesign where id=$id";
 $query = mysqli_query($con,$deletequery);

 if($query){
 	?>
 	<script>
 		alert("Deleted successfully");
 	</script>
 	<?php
 }else{
 	?>
 	<script>
 		alert("Not Deleted");
 	</script>
 	<?php
 }

 header('location:user.php');

?>