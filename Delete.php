<?php 

include_once('Conn.php');   

class Delete extends Conn{
 public $email;
    public function __construct(){
 
        parent::__construct();
    
    }
 
    public function delete($email){
        
            $sql = "DELETE FROM student WHERE email = '$email'"; 
            
            if (mysqli_query($this->connection, $sql)) {
                mysqli_close($this->connection);
                header('Location: table.php'); 
                exit;
            }
            
            else {
                echo "Error deleting record";
            }
    }

   
}
$delete = new Delete();
$email = $_GET['email'];
echo "$email";
 $delete->delete($email);

?>