<?php
include('./schoolhead/header.php');
?>


<head>
	<br>
	<title></title>
 <style>
 	*{
 		padding:0px;
 		margin:0px;
 	}
  body{

 background-color:blue;
}
.container{
	width:960px;
	margin:0 auto;
	background-color:#fff;
	height:600px;
	margin-top:10px;
	padding:20px;
}
.wrapper{
	margin-bottom:20px;

}
h1{
	font-family: vardana;
	color:rgb(84,84,172);
}
.data{
	width:800px;
	padding:10px;
	margin-top:20px;
}
.data select{
	width:200px;
	padding:3px;
	margin:20px 0px;
	float: left;
	position:relative;
	margin-right:20px;

}
.submit{
   margin-top:18
   px;
   width: 100px;
   padding: 6px;
   border:none;
   font-weight:bold;
   outline:none;
   background:blue;
   color:#fff;
   cursor: pointer;
}
.table{
	margin-top:20px;
	border:1px solid #ccc;
	clear:both;

	}
	.table th{
		width: 200px;
		font-family:vardana;
		f
		ont-size:13px;
		color:rgb(84,84,172);
		padding:3px 20px 3px 20px;
	}
	.table td{
		text-align:left;
		width: 300px;
		font-family:vardana;
		font-size:13px;
		padding:3px 68px 3px 68px;
	}
}

}

</style>
	<body>
		
<div class="container">
		<div class="wrapper">
			<h1>List Of Result Of Promoted Students</h1>
		</div>
		<div class="data">
	
	<form action="promotion.php" method="POST">
		<?php

      $con = mysqli_connect("localhost","root","project123");
                  mysqli_select_db($con, 'quizdbase');
                  

        

         


	?>
		
	
</form>


        <select name="class">
		<option>Class</option>
			<?php

	  
                  	$displayquery = "select * from  class";
                  	$res = mysqli_query($con,$displayquery);

                  	
                  	while ($row = mysqli_fetch_array($res)){
                   $classid = $row['id'];
                   $rowdata = $row['classname'];


            ?>

               <option value="<?php echo $classid; ?>"><?php echo $rowdata; ?></option>
			
                 <?php
                  	}
                  
                  
                  	?>	
			

   
    

		</select>
        
		<select name="section">
			<option>section</option>
			<?php
			
        $displayquery = "select * from  section";
                  	$querydisplay = mysqli_query($con,$displayquery);

                  	
                  	while ($row = mysqli_fetch_array($querydisplay)){
                   $sectionid = $row['id'] ;
                   $rowdata = $row['sectionname'];


            ?>
               <option value="<?php echo $sectionid; ?>"><?php echo $rowdata; ?></option>

			
                  	<?php

                  	}
                  
                  	?>	
			

			
		</select>

		  
	<input type="submit" name ="submit"	class="submit" />		
	 <table border="1" class="table">
	 

<tr>
	 		<th>Student Name</th>
	 		<th>Marks Secured In Percentage</th>
	 	</tr>
	 	
	 	
       <?php
       if(isset($_POST['submit'])){

                

			$classname= $_POST['classname'];
			$sectionname = $_POST['sectionname'];
             $displayquery = "select * from result";
                  	$res = mysqli_query($con,$displayquery);
                   
                             $nums = mysqli_num_rows($query);
                             while($row = mysqli_fetch_array($res)){
                            
                            


                  	
                  	
                   $id = $row['id'];
                   $name = $row['name'];
                   $mark = $row['mark'];

                   ?>

	 	       <?php if (mysqli_num_rows($res)> 0) ?>
                          <td><?php echo $row['id']; ?> </td>
                         <td><?php echo $row['name']; ?> </td>
                        <td><?php echo $row['mark']; ?> </td>
                        
                   </tr>
                   	


                   <?php

}
                
}

                 

            
            
     ?> 
     

	 </table>
	
	</form>
	</div>
	</div>



























<?php
include('./schoolhead/footer.php');
?>
