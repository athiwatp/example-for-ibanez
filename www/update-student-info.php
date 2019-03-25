<?php
include 'header.php';
if (isset($_GET['id'])) {
    $student_info = $student_obj->view_student_by_student_id($_GET['id']);
    if (isset($_POST['update_student']) && $_GET['id'] === $_POST['id']) {
        $student_obj->update_student_info($_POST);
        $student_info = $student_obj->view_student_by_student_id($_GET['id']);
    }
} else {
    header('Location: Report.php');
}
?>
<div class="container " > 
    <div class="row content">
        <a href="Report.php"  class="button button-purple mt-12 pull-right">View Student List</a> 
        <h3>Update Student Info</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php if (isset($student_info['idstd'])) {
            echo $student_info['idstd'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?php if (isset($student_info['name'])) {
                   echo $student_info['name'];
        } ?>" id="name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="lastname">LastName:</label>
                <input type="text" name="lastname" value="<?php if (isset($student_info['lastname'])) {
                   echo $student_info['lastname'];
        } ?>" id="lastname" class="form-control" required maxlength="50">
            </div>            
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" value="<?php if (isset($student_info['email'])) {
            echo $student_info['email'];
        } ?>" name="email" id="email" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="telephone">Telephone:</label>
                <input type="text" class="form-control" value="<?php if (isset($student_info['number'])) {
            echo $student_info['number'];
        } ?>" name="telephone" id="telephone" required maxlength="50">
            </div>

                </select>
            </div> 

            <input type="submit" class="button button-green  pull-right" name="update_student" value="Update"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

