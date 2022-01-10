<?php
				$con = mysqli_connect("localhost","root","project123");
                  mysqli_select_db($con, 'quizdbase');
                  if(isset($_POST['save'])){
                  	$event=$_POST['events'];
                 
                  	$files = $_FILES['file'];
                  
	 

		 
		 
                  	print_r($event);
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
                  	$q = "INSERT INTO event( `events`,'image') VALUES ('$event',$destinationfile')";
                  	$query = mysqli_query($con,$q);
                  	$displayquery = "select * from  event";
                  	$querydisplay = mysqli_query($con,$displayquery);

                  	
                  	while ($result = mysqli_fetch_array($querydisplay)){
                  		?>
                   <tr>
                   	<td> <?php echo $result['id']; ?> </td>
                   	<td> <?php echo $result['events']; ?> </td>
                   
                   	
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
$record_qry="SELECT * FROM event";
$record_res=mysqli_query($con,$record_qry);
while($record_data=mysqli_fetch_assoc($record_res))
{
}
  ?>



</body>


<?php