<?php
include 'header.php';
if (isset($_POST['create_student'])) {
    $student_obj->create_student_info($_POST);
    echo '<script type="text/javascript">
    window.location = "Report.php"
    </script>';
}
?>
<div class="container"> 
    <div class="row content">
        <a  href="Report.php"  class="button button-purple mt-12 pull-right">View Student List</a> 
        <h3>Create Student Info</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="lastname">LastName:</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required maxlength="50">
            </div>            
            <div class="form-group">
                <label for="emailemail_address">Email address:</label>
                <input type="email" class="form-control" name="email" id="email" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="telephone">Telephone:</label>
                <input type="text" class="form-control" name="telephone" id="telephone"  maxlength="50">
            </div>
            <input type="submit" class="button button-green  pull-right" name="create_student" value="Submit"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

