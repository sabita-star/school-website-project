<?php
include('./schoolhead/header.php');
?>

    <div class="main-div">
      
        
        <div class="center-div">
          <div class="table-responsive">
            

            
              <div class=" mx-5 mt-5 text-center">
                <h1><p class="bg-info text-white p-2">List Of Admin Users</p></h1>
              
                  <h5><table class="table"></h5>
                                    <thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>Name </th>
                                    <th>Email</th>
                                    <th>Mobile No.</th>
                                    
                                    <th colspan="2">Operation</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                              
                             $con = mysqli_connect('localhost','root','project123');
                               mysqli_select_db($con, 'quizdbase');
 

                             
                             $selectquery = "select* from homesign";
                             $query = mysqli_query($con,$selectquery);
                             $nums = mysqli_num_rows($query);
                             while($res = mysqli_fetch_array($query)){
                            
                            

     
?>
                         <tr>
                          <td><?php echo $res['id']; ?> </td>
                         <td><?php echo $res['name']; ?> </td>
                        <td><?php echo $res['email']; ?> </td>
                         <td><?php echo $res['mobile'] ?> </td>
                         
                         <td><a href="updates.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"> <i class="fa fa-edit" aria-hidden="true"></i>  </a></td>
                         <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i>  </a></td>

                         </tr>

                         <?php
                       }
                             
                            ?>
                            </tbody>
                            </table>   
                                    

                                      
                             </div>
                         </div>
                       </div>
                       <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
                         
         
  <div class="card-header" >	
<img src="image/bodyimg1.jpg" align="float-right"  width="100%" height="200%">
             


<?php
include('./schoolhead/footer.php');
?>
