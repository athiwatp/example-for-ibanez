<?php
 include 'header.php';
 

 if(isset($_GET['id'])){
  $student_info=$student_obj->view_student_by_student_id($_GET['id']);
  


     
 }else{
  header('Location: Report.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content">

       
          
           
             <a  href="Report.php"  class="button button-purple mt-12 pull-right">View Student List</a> 
     
 <h3>View Student Info</h3>
       
    
     <hr/>
   
   
 
      
    <label >Name:</label>
   <?php  if(isset($student_info['name'])){echo $student_info['lastname']; }?>

<br/>
    <label>Email address:</label>
  <?php  if(isset($student_info['email'])){echo $student_info['email'];} ?>
    
    <br/>
    <label >ID:</label>
      <?php  if(isset($student_info['idstd'])){echo $student_info['idstd'];} ?>
    <br/>


          

    <a href="<?php echo 'update-student-info.php?id='.$student_info["idstd"] ?>" class="button button-blue">Edit</a>

   
  
     
   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

