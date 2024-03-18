<?php
class DBController{
    //  Database Connection Properties
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $database = "shopee";

    // connection property
    public $con = null  ;

    
    // call constructor
    public function __construct(){
        $this->con = new  mysqli($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_errno){
            echo "Fail to connect : ".$this->con->connect_error;
        }
        // else{
        //     echo"connection success";
        // }
    }

    public function __destruct(){   
        $this->closeConnection();
    }


    // for mysqli closing the connection
    protected function closeConnection(){   
        if($this->con != null){
            $this->con->close();
            $this->con = null;
        }
    }
    
}



