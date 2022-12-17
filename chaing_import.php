<?php
        // session_start();
        require('chaing_connect.php');
		if(isset($_POST["import"])){
			$fileName = $_FILES["excel"]["name"];
			$fileExtension = explode('.', $fileName);
      $fileExtension = strtolower(end($fileExtension));
			$newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory = "uploads/" . $newFileName;
			move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			require 'excelReader/excel_reader2.php';
			require 'excelReader/SpreadsheetReader.php';

			$reader = new SpreadsheetReader($targetDirectory);
			foreach($reader as $key => $row){
				 $number = $row[0];
				// echo $desc = $row[1];
                if(strlen($number)==1){
                    $number="0".$number;
                  };
				 mysqli_query($db, "INSERT INTO result VALUES('','$number')");
    
               
                    header('location:chaing_index.php');
			}
        }
        
        



	
            ?>