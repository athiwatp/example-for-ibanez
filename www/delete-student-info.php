<?php
 include 'header.php';
 if(isset($_GET['id'])){
  $student_info=$student_obj->delete_student_info_by_id($_GET['id']);
  echo '<script type="text/javascript">
  window.location = "Report.php"
  </script>';
     
 }else{
  @header('Location: Report.php');
 }
 
 ?>
