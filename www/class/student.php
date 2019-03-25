<?php
class Student
{
    private $conn;
    function __construct() {
    @session_start();
    $servername = "database";
    $dbname = "ibanez";
    $username = "root";
    $password = "root";
  

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");

    // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
       }else{
        $this->conn=$conn;
      }

    }


    public function student_list(){
        
       $sql = "SELECT * FROM studentb ORDER BY idstd DESC ";
       $result=  $this->conn->query($sql);
       return $result;  
    }
    
    public function create_student_info($post_data=array()){
         
       if(isset($post_data['create_student'])){
       $student_name= mysqli_real_escape_string($this->conn,trim($post_data['name']));
       $student_lastname= mysqli_real_escape_string($this->conn,trim($post_data['lastname']));
       $email_address= mysqli_real_escape_string($this->conn,trim($post_data['email']));
       $tel= mysqli_real_escape_string($this->conn,trim($post_data['telephone']));

       $sql="INSERT INTO studentb (name,lastname,email,number) VALUES ('$student_name', '$student_lastname', '$email_address','$tel')";
        
        $result=  $this->conn->query($sql);
        
           if($result){
           
               $_SESSION['message']="Successfully Created Student Info";
             
           }
          
       unset($post_data['create_student']);
       }
       
        
    }
    
    public function view_student_by_student_id($id){
       if(isset($id)){
       $student_id= mysqli_real_escape_string($this->conn,trim($id));
      
       $sql="SELECT * FROM studentb WHERE idstd='$student_id'";
        
       $result=  $this->conn->query($sql);
     
        return $result->fetch_assoc(); 
    
       }  
    }

    public function login($post_data=array()){
      if(isset($post_data)){
         $setUsername= mysqli_real_escape_string($this->conn,trim($post_data['username']));
         $setPassword= mysqli_real_escape_string($this->conn,trim($post_data['password']));
     
         $sql="SELECT * FROM registertb WHERE gname='$setUsername' AND passwd='$setPassword'";
       
         $result = $this->conn->query($sql);
         
         if ($result) {
            $checkLogin = $result->num_rows;
            if($checkLogin > 0) {
               $_SESSION['isLogin'] = true;
            } else {
               $_SESSION['message']="Username or Password Wrong";
            }
         }

      }  
   }
    
    public function update_student_info($post_data=array()){
       if(isset($post_data['update_student'])&& isset($post_data['id'])){
           
       $student_name= mysqli_real_escape_string($this->conn,trim($post_data['name']));
       $student_lastname= mysqli_real_escape_string($this->conn,trim($post_data['lastname']));
       $email_address= mysqli_real_escape_string($this->conn,trim($post_data['email']));
       $tel= mysqli_real_escape_string($this->conn,trim($post_data['telephone']));
       $student_id= mysqli_real_escape_string($this->conn,trim($post_data['id']));

       $sql="UPDATE studentb SET name='$student_name',email='$email_address',lastname='$student_lastname',number='$tel' WHERE idstd =$student_id";
     
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Updated Student Info";
           } else {
            $_SESSION['message']="Unsuccessfully Updated Student Info";
           }
       unset($post_data['update_student']);
       }   
    }
    
    public function delete_student_info_by_id($id){
        
       if(isset($id)){
       $student_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  studentb  WHERE idstd =$student_id";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Deleted Student Info";
            
           }
       }
         @header('Location: index.php'); 
    }
    function __destruct() {
      mysqli_close($this->conn);  
    }
    
}

?>