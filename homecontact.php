<!DOCTYPE html>
<html>
<body>
<head>
    <title></title>
    	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>

   </body>  


  <section>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a href= "" class="navbar-brand text-warning font-weight-bold">SCHOOL-WEBSITE </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

             <li class="nav-item active">
          
   					<a class="nav-link" href= "eduhome.php" text-white>HOME <span class="sr-only">(current)</span> </a>
   				</li>
   				  <li class="nav-item">
   				  <a  class="nav-link" href="about.php" text-white>ABOUT US </a>
   				 </li>

   				  <li class="nav-item">
   				  
                  <a  class="nav-link" href="homeservice.php" text-white>SERVICES </a>
              </li>
   				  <li class= "nav-item">
   				  <a  class="nav-link" href="hometeam.php">TEAM</a>
   				</li>
   				   <li class="nav-item">
   				   <a class="nav-link" href="homecontact.php">CONTACT US</a>	
   				</li>
        
          
        
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="jumbotron">
   <section class="my-5">
       
      <div class="py-5">
      
      
    <h2 class="text-center">CONTACT US</h2>
     <h4><p class=" text-primary text-center">Want To Be Alrounder Login Here!</p></h4>
     <br>
     <h3><b><p class="text-center"><u>USER LOGIN</b></u></p></h3>

   </div>
   <div class="w-50 m-auto">
     <form action="admin2.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="name" autocomplete="off" class="form-control">
      </div>
       
       
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" autocomplete="off" class="form-control"required>
        </div>
        <div class="form-group">
        <label>Repeat Password</label>
        <input type="text" name="cpassword" autocomplete="off" class="form-control"required>

      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="user.php" class="btn btn-secondary">Close</a>
    </form>
  </div>
  <?php if(isset($msg)) {echo $msg; }?>
</section>

<footer>
  <p class="p-3 bg-danger text-white text-center">@Sabitadeveloper</p>
</footer>
</body>
</html>


