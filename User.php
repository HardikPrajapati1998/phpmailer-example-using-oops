<?php
include_once('Conn.php');
 
class User extends Conn{
 
    public function __construct(){
 
        parent::__construct();
    }
 public function registration($fname, $birthday,$gender,$email,$phone,$password){
    $sql = "SELECT email FROM student WHERE email='$email' ";

    $result = mysqli_query($this->connection, $sql);
    $count = mysqli_num_rows($result);
    
    if ($count == 1)
    {
       
  
         echo "<script>
             alert('email already exist');
             window.location.href='index.php';
             </script>"; 
             exit;
      
    }
    else
    {
        $result = mysqli_query($this->connection, "INSERT INTO  student (fname,birthday,gender,email,phone,password) VALUES('$fname','$birthday','$gender','$email','$phone','$password')");

        //display success message
        echo "<script>
        alert('Registration successful');
             window.location.href='login.php';
             </script>"; 
             exit;
      
        echo "<font color='green'>Data added successfully.";
    }

 }
    public function check_login($email, $password){
        $sql = "SELECT * FROM student WHERE email = '$email' AND password = '$password'";
        $query = $this->connection->query($sql);
        if($query->num_rows > 0){
            $row = $query->fetch_array();
           
            return $row['email'];
        }
        else{
            return false;
        }
    }
  public function details($sql){
        $query = $this->connection->query($sql);
        $rows = [];
        while ($row = $query->fetch_assoc()) {
            $rows[] = $row;
        }      
        return $rows;       
    }   
    public function escape_string($value){
        return $this->connection->real_escape_string($value);
    }
}