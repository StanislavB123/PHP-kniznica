<?php

$dbServername = "db";
      $dbUsername = "db";
      $dbPassword = "db";
      $dbname = "db";

      $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);
      
      if (!$conn) {
          header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
      }

      $result=array("erorr"=>false);
      
        $id=$_POST['bookID'];
        $result=$conn->query("DELETE FROM book WHERE book.ID='$id'");
        


echo json_encode($result);
