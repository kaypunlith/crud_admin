<?php 
  include("../config/config.php");
  include("../handle/redirect.php");
  $id=$_POST['id_del'];
  $sql="DELETE FROM `prodct_admin` WHERE `prodcut_id`=$id";
  $con->query($sql);
  if($sql){
    redirect("../index.php");
    
  }

?>