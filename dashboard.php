

<!DOCTYPE html>


<html lang="en">
<head>
	00,400i,600,600i,700,700i,<meta charset="UTF-8">
  <meta name="viewpoint" content="width=device-width,intial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, intial-scale=1, shrink-to=fit=no">
  <meta name="author" content="":>
  <meta name="description" content="">
  <title>Dashboard</title>

  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,4800,800i">
          </head>
<body>
	<?php
	define('TITLE', 'Dashboard');
	define('PAGE', 'dashboard');
	
	?>

    <nav class="navbar navbar-dark fixed-top bg-success flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0"  href="dashboard.php" >SCHOOL WEBSITE Admin Area</a></nav>

	
                     <div class="container-fluid" style="margin-top:20px;">
                     	<div class="row">
                     		<nav class="col-sm-2 bg-warning  sidebar py-5">
                     			<div class="sidebar-sticky">
                     				<ul class="nav flex-column">
                              <div id="wrapper">
                              	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                          <li class="nav-item"><a class="nav-link <?php if(PAGE=='user'){echo 'active';}?>"
                           href="dashboard.php"><h5><i class="fa fa-dashboard"></i><b>Dashboard</b></a></h5>
                      
                           <hr class="sidebar-divider"></li>

                           <div class="sidebar-heading">

                           <li class="nav-item"><a class="nav-link  collapsed" href="#" data-toggle="collapse" data-target="#collapseAcademic" aria-expanded="true" aria-controls="collapseAcademic">
                           <h5><i class="fa fa-university"></i><b>Academic</b></a></h5>
                           <div id="collapseAcademic" class="collapse" aria-labelledby="headingAcademic" data-parent="#accordionSidebar">
                           	<div class="bg-white py-2 collapse-inner rounded">
                           		
                           		<p><a class="collapse-item" href="acheive.php">Student Achievement</a></p>
                           		<p><a class ="collapse-item" href="student2.php">Student Records</a></p>
                           		<p><a class="collapse-item"  href="result.php">Result View</a></p>
                              <p><a class="collapse-item"  href="viewmark.php">Students %/Grade Calcy</a></p>
                           	</div></div>
                           	<hr class="sidebar-divider"></li>

                       <div class="sidebar-heading">
                       <li class="nav-item"><a class="nav-link  collapsed" href="#" data-toggle="collapse" data-target="#collapseAdministrative" aria-expanded="true" aria-controls="collapseAdministrative">
                           <h5><i class="fa fa-cog"></i><b>Administrative</b></a></h5>
                           <div id="collapseAdministrative" class="collapse" aria-labelledby="headingAdministrative" 
                           data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                            	<p><a class="collapse-item" href="general.php">Admission Form</a></p>
                            	<p><a class="collapse-item" href="teacher1.php">Teacher Profiles Record</a></p>
                            	 <p><a class ="collapse-item" href="general.php">General setting</a></p>
                                  <p><a class="collapse-item"  href="sms.php">Mail/SMS Templates</a></p>
                            </div></div>
                            <hr class="sidebar-divider"></li>
                           
                          
                       
                       <li class="nav-item"><a class="nav-link  collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
                           <h5><i class="fa fa-user"></i><b>Users</b></a></h5>
                           <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" 
                           data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                              <p><a class="collapse-item" href="user.php">User List</a></p>
                              <p><a class ="collapse-item" href="calender.php">Calendar</a></p>
                              <p><a class="collapse-item"  href="library.php">Library</a></p>
                              <p><a  class="collapse-item"  href="calender.php">Messages</a></p>
                            </div></div>
                            <hr class="sidebar-divider"></li>

                       
                       <li class="nav-item"><a class="nav-link  collapsed" href="#" data-toggle="collapse" data-target="#collapsePayment" aria-expanded="true" aria-controls="collapsePayment">
                           <h5><i class="fa fa-credit-card"></i><b>Payment</b></a></h5>
                           <div id="collapsePayment" class="collapse" aria-labelledby="headingPayment" 
                           data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                              <p><a class="collapse-item" href="payment1.php">Fees Circular</a></p>
                             <p><a class ="collapse-item" href="payment2.php">Transportation</a></p>
                              <p><a class="collapse-item"  href="payment1.php">Transaction</a></p>
                            </div></div>
                            <hr class="sidebar-divider"></li>
                           
                           
						
						<li class="nav-item"><a class="nav-link <?php if(PAGE=='event'){echo 'active';}?>"
						href="event.php"><h5><i class="fa fa-clock-o"></i><b>Events</b></a></h5>
						<hr class="sidebar-divider"></li>
						<li class="nav-item"><a class="nav-link <?php if(PAGE=='notice'){echo 'active';}?>"
						href="notice.php"><h5><i class="fa fa-bullhorn"></i><b>Notice</b></a></h5>
                        <hr class="sidebar-divider"></li>
                       
                     <li class="nav-item"><a class="nav-link <?php if(PAGE=='logout'){echo 'active';}?>"
						href="logout.php"><h5><i class="fa fa-sign-out"></i><b>LogOut</b></a></h5>

            <hr class="sidebar-divider"></li>
                                                         
                                          
                       
                    </ul>
                </div>
            
        
            

          
                        </nav>
                    

              
                         
                       
        
            <!--end side bar 1st colm-->
                         <div class="col-sm-9 col-md-10">  
                        <div class="row text-center mx-5">
                          <div class="col-sm-4 mt-5">
                            <div class="card text-white bg-primary  mb-3" style="max-width :20rem;">
                              <div class="card-header">Services</div>
                              <div class="card-body">
                              <h4 class="card-title">43</h4>
                              <a class="btn text-white" href="#">View</a>
                               </div>
                 </div>
                   </div> 
                               
                                <div class="col-sm-4 mt-5">
                            <div class="card text-white bg-danger mb-3" style="max-width :20rem;">
                              <div class="card-header">Messages</div>
                              <div class="card-body">
                              <h4 class="card-title">62</h4>
                              <a class="btn text-white" href="#">View</a>
                               </div>
                 </div>
                   </div> 
                              <div class="col-sm-4 mt-5">
                            <div class="card text-white bg-success  mb-3" style="max-width :20rem;">
                              <div class="card-header">Invoice</div>
                              <div class="card-body">
                              <h4 class="card-title">22</h4>
                              <a class="btn text-white" href="#">View</a>
                               
                 </div>
                   </div>
               </div>
           </div>
                            <div class="mx-5 mt-5 text-center">
                              <p class="bg-info text-white p-2">List Of Admin Users</p>
                            

</p>
                                 <img src="image/scimgy.jpg"   width="100%" height="200">
            
                  <table class="table">
                                    <thead>
                                    <tr>
                                    <th scope="col">Name </th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Feed back</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">Sabita</th>
                                      <td>8554062363</td>
                                      <td>sabi@123.com</td>
                                      <td>Excellent</td>

                                      <td><button type="submit" class="btn btn=secondary" name="delete" value="Delete"><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                       
                                  <tr>
                                      <th scope="row">Harshit</th>
                                      <td>8554060008</td>
                                      <td>har@123.com</td>
                                      <td>Best Site</td>

                                      <td><button type="submit" class="btn btn=secondary" name="delete" value="Delete"><i class="fa fa-trash"></i></button></td>
                                    </tr>

                                    <tr>
                                      <th scope="row">Vinayak</th>
                                      <td>8664060008</td>
                                      <td>vin@123.com</td>
                                      <td>Like It</td>

                                      <td><button type="submit" class="btn btn=secondary" name="delete" value="Delete"><i class="fa fa-trash"></i></button></td>
                                    </tr>


                                  </tbody>
                                 </table>
                             </div>
                         </div>

                                  
                                  

                                      
                                 
                              
                                      

 


                                  
                               
            
  


                        
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="../js/all/.min.js"></script>	 
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>  
  <script type="text/javascript" src="js/adminajaxrequest.js"></script>
  <script type="text/javascript" src="/js/custom.js"></script>
	</body>
	</html>