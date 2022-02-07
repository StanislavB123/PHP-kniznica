<?php

$dbServername = "db";
      $dbUsername = "db";
      $dbPassword = "db";
      $dbname = "db";

      $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);
      
      if (!$conn) {
          header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
      }

      $sql = "SELECT ID, Name, Isbn, Price, Category_id, Author FROM book";
  $result = $conn->query($sql);

  $sql = "SELECT book.*, category.Name AS category 
  FROM book LEFT JOIN category ON book.Category_id = category.ID;";
  $result = $conn->query($sql);
  while ($info = $result->fetch_assoc())
    {
        $statistic[] = $info;
    }

echo json_encode($statistic);
