<?php
 include 'header.php';
 

 if(isset($_GET['id'])){
  $student_info=$student_obj->view_student_by_student_id($_GET['id']);
  


     
 }else{
  header('Location: adminview.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content">

       
          
           
             <a  href="adminview.php"  class="button button-purple mt-12 pull-right">View Program List</a> 
     
 <h3>View program information</h3>
       
    
     <hr/>
   
   
 
      
    <label >Program:</label>
   <?php  if(isset($student_info['student_name'])){echo $student_info['student_name']; }?>

<br/>
    <label>Email:</label>
  <?php  if(isset($student_info['email_address'])){echo $student_info['email_address'];} ?>
    
    <br/>
    <label >Contact:</label>
      <?php  if(isset($student_info['contact'])){echo $student_info['contact'];} ?>
    <br/>

  
    <label >Country:</label>
      <?php  if(isset($student_info['country'])){echo $student_info['country'];} ?>
    <br/>

          

    <a href="<?php echo 'update-student-info.php?id='.$student_info["student_id"] ?>" class="button button-blue">Edit</a>

   
  
     
   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

