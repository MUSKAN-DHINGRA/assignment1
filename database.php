<?php
  
  class Database{
    
    private $connection;
    //construct method
    function __construct(){
    
      $this->connect_db();
    }
    
    //connect with the database
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'employee');

      //if unable to connect to database outputs the connection faileed along with error message
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error());
      }
    }

    //create function for inserting the data received into the table or database created
    public function create($fname, $lname, $age, $email, $hoursworked, $department){
      $sql = "INSERT INTO employee_portal (fname, lname, age, email, hoursworked, department) VALUES ('$fname', '$lname', '$age', '$email', '$hoursworked', '$department')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }
    
    public function read(){
		    $sql = "SELECT * FROM employee_portal";
 		    $res = mysqli_query($this->connection, $sql);
 		    return $res;
	  }
    
  }
  $database = new Database();
?>
