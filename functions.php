<?php
// Required mysql connection
require ("database/DBController.php");

// Required Product Class
require ("database/Product.php");

// Required Cart Class
require ("database/Cart.php");

// DB Controller Object
$db = new DBController();

// product Object
$product = new Product($db);
$product_suffle = $product->getData();
print_r($product->getData());  

//Cart object
$Cart = new Cart($db);
// print_r();
// $arr = array(
//     "user_id" =>1,
//     "item_id"=> 4,
// );
// $cart->insertInCart($arr);

?>