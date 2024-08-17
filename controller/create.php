<?php 
  include("../config/config.php");
  $title=$_POST['title'];
  $price=$_POST['price'];
  $qty=$_POST['qty'];

  $status=$_POST['status'];
  $img_name=$_FILES['img']['name'];
  $img_tmp=$_FILES['img']['tmp_name'];
  $img_dir="../public/image/$img_name";
  move_uploaded_file($img_tmp,$img_dir);
  $sql="INSERT INTO `prodct_admin`(`prodcut_id`, `product_title`, `product_image`, `product_price`, `product_qty`, `product_status`) 
  VALUES (null,'$title','$img_name','$price','$qty','$status')";
  $con->query($sql);
 ?>