<?php 

include('../config.php');

$ptitle = $_POST['ptitle'];
$pcat = $_POST['pcat'];
$pweight = $_POST['pweight'];
$punits = $_POST['punits'];
$price = $_POST['pprice'];
$pstatus = $_POST['pstatus'];
$pdes = $_POST['pdes'];
$pimg_name = $_FILES['pimage']['name'];
$pimg_tmp_name = $_FILES['pimage']['tmp_name'];
// echo "$ptitle, $pcat, $pweight, $punits, $price, $pstatus, $pdes, $pimg_name, $pimg_tmp_name";

move_uploaded_file($pimg_tmp_name, 'uploads/'. $pimg_name);
$insert_product = "INSERT INTO `addproduct` (`pid`, `pname`, `pdescription`, `pcategory`, `price`, `pstatus`, `punits`, `pweight`, `image`) VALUES (NULL, '$ptitle', '$pdes', '$pcat', '$price', '$pstatus', '$punits', '$pweight', '$pimg_name')
";
$insert_product = mysqli_query($connection, $insert_product);
if($insert_product){
    echo "Product Successfully added";
}else{
    echo "Something went wrong";

}

?>