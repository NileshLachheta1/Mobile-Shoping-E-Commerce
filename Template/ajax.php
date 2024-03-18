<?php 

 // Required mysql connection
 require("../database/DBController.php");
 
 // Required Product Class
 require("../database/Product.php");

  
// DB Controller Object
$db = new DBController();

 // priduct Object
$product = new Product($db);
$product_suffle = $product->getData();

if(isset($_POST["itemid"])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}

?>