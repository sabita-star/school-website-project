<?php
include('./schoolhead/header.php');
?>
<?php
$con = mysqli_connect("localhost","root","project123");
                  mysqli_select_db($con, 'quizdbase');
?>
<head>
	<html>
	
<link rel="stylesheet" href="main.css">
 <link rel="stylesheet" type="text/css" href="print.css" media="print">
 
 
 
 
  <style>
	@media print{
		#page-view{

		}
	}
	{
		size:A4;
		margin:0;
	}
	#print-btn
	{
		display: none;
		visibility: none;

	}
</style>
</head>
	<body>

	

	<div  class="container">
		<div class="row">
			<div class="col-xl-12">

		
	<h1 class="text-center pt-5"><u>Fees-Sai International School</u></h1>
	   
			
		

				<table class="table table-bordered" >
					<thead><tr>
					
					<th>Student Name</th>
					<th>Reg.No</th>
					<th>Other Charges</th>
					<th>class</th>
					<th>date</th>
					<th>Deposit By</th>
					<th>Months</th>
					<th>Total Admission Fees</th>
					
					
				

		   
</tr>
</thead>


<tbody>

<?php
$id=1;

$con = mysqli_connect("localhost","root","project123");
                  mysqli_select_db($con, 'quizdbase');
 $id=1;                
$payment_qry="SELECT * FROM payment";
$payment_res=mysqli_query($con,$payment_qry);
while($payment_data=mysqli_fetch_assoc($payment_res))
{
	?>

 <tr>

 	<td><?php echo $payment_data['name']; ?></td>
 	<td><?php echo $payment_data['reg']; ?></td>
     <td><?php echo $payment_data['particulars']; ?></td>
     <td><?php echo $payment_data['class']; ?></td>
     <td><?php echo $payment_data['date']; ?></td>
     <td><?php echo $payment_data['depositer']; ?></td>
     <td><?php echo $payment_data['month']; ?></td>
      <td><?php echo $payment_data['amount']; ?></td>
    </tr>

      <?php
      $id++;
    }
    ?>
  </tbody>
     
   </table>
<div class="text-center">
 <button onclick="window.print()" class="btn btn-danger">Print</button>
        

       



 

  </div>
</div>
</div>



</body>

































<?php
include('./schoolhead/footer.php');
?>



