<?php 

// Use to fetch product data
class Product{
    public $db = null;
    
    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData function
    public function getData($table = 'product'){    
        $result = $this->db->con->query(query:"SELECT * FROM {$table}");
        $resultArray = array();

        while($item = mysqli_fetch_array($result )){
            $resultArray[] = $item; 
        }
        return $resultArray;
    }

    // get product using item_id

    public function getProduct($item_id = null, $table = "product"){
        if(isset($item_id)){
            $result = $this->db->con->query(query:"SELECT * FROM {$table} WHERE item_id={$item_id}");
            $resultArray = array();
            
            while($item = mysqli_fetch_array($result )){
                $resultArray[] = $item; 
            }
            return $resultArray;
        }
    }
}
?>