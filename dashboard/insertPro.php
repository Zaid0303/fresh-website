<?php 
include('../config.php');

// print_r($_POST);

$pro_name = $_POST['pro_name'];
$pro_des = $_POST['pro_des'];
$pro_cat = $_POST['pro_cat'];
$pro_price = $_POST['pro_price'];
$pro_image = $_POST['pro_image'];

if(!empty($pro_name) AND !empty($pro_des) AND !empty($pro_cat) AND!empty($pro_price) AND !empty($pro_image) ){
    $result = mysqli_query($connection, "INSERT INTO `addproduct` (`pid`, `pname`, `pdescription`, `pcategory`, `price`, `image`)
     VALUES (NULL, '$pro_name', '$pro_des', '$pro_cat', '$pro_price', '$pro_image')");
    if($result){
        echo "Product successfully Added";
    }else{
        
        echo "Failed to add the product";
    }
}

?>