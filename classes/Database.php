<?php
   class Database{
    //Properties
      private $server_name = "localhost"; //127.0.0.1
      private $username = "root";
      private $password = "root"; //MAMP(Mac) はroot
      private $db_name = "the_company_october";
      protected $conn; //this $conn can be accessible to another class who inherit the Database.php class file

      //constructor
      public function __construct(){
          $this->conn = new mysqli($this->server_name,$this->username,$this->password,$this->db_name);
      
     //check if there is an error in the connection
      if ($this->conn->connect_error){
        die("Unable to connect to the database ". $this->conn->connect_error);
      }

      }
        
      
   }
?>