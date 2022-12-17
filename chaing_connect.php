<?php
   $db = mysqli_connect('127.0.0.1','root', '','chaing');

   if($db ==true){
    // echo "database connected";
   }
   else{
    die('Error:'.mysqli_connect_error($db));
   }
   
?>