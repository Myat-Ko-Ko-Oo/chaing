<?php
require "chaing_connect.php";
// add
  if(isset($_POST['add'])){
    $number =  $_POST['add_num'];
   


if(empty($number)){
if($number==00){
  $number = '00';
}
echo "Do Not Add Empty Field Number";
}

  if(!empty($number)){
    if(strlen($number)==1){
      $number="0".$number;
    };
    $insertquery = "INSERT INTO result(number) VALUES('$number')";
    mysqli_query($db,$insertquery);
       header('location:chaing_index.php');
  }
}
    ?>