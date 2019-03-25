<?php
include 'header.php';
unset($_SESSION['isLogin']);
if (isset($_POST['login'])) {
    $student_obj->login($_POST);
    if($_SESSION['isLogin'] > 0) {
        echo '<script type="text/javascript">
        window.location = "Report.php"
        </script>';
    } else {
        unset($_SESSION['isLogin']);
    }
}
?>
<div class="container"> 
    <div class="row content">
        <h3>Login</h3>
        <hr/>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>        
        <form method="post" action="">
            <div class="form-group">
                <label for="username">UserName:</label>
                <input type="text" name="username" id="username" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required maxlength="50">
            </div>            
            <input type="submit" class="button button-green  pull-right" name="login" value="Login"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

