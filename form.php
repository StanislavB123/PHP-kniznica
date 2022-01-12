<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Form</title>
</head>
<body>

  <?php 
      $dbServername = "db";
      $dbUsername = "db";
      $dbPassword = "db";
      $dbname = "db";

      $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);
      
      if (!$conn) {
      echo '<div class="connectionbad">' . 'Something is wrong';
      }else{
          echo '<div class="connectionOK">' . 'Nice, database connected successfully'. "<br>";
      }

      $sql = "SELECT ID, Name, Isbn, Price, Category_id, Author FROM book";
  $result = $conn->query($sql);

  $sql = "SELECT book.*, category.Name AS category 
  FROM book LEFT JOIN category ON book.Category_id = category.ID;";
  $result = $conn->query($sql);

  $html = '';
  if ($result->num_rows > 0) {
    $html .="<table class='table table-striped answer'>";
    $html .= "<tr>";
    $html .= '<th>' . 'Meno' . '</th>' . '<th>' . 'Isbn' . '</th>' . '<th>' . 'Cena' . '</th>' . '<th>' . 'Category' . '</th>' . '<th>' . 'Autor' . '</th>';
    $html .= "</tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
      $html .= "<tr>";
      $html .= 
        '<td>' . $row["Name"] . '</td>' . 
        '<td>' . $row["Isbn"]. '</td>' . 
        '<td>' . $row["Price"]. '</td>' . 
        '<td>' . $row["category"] . '</td>' . 
        '<td>' . $row["Author"] . '</td>' . "<br>";
      $html .= "</tr>";
            
    }
    $html .= "</table>";
  } else {
    echo "0 results";
  }
  echo $html;
  $conn->close();
  ?>

</body>
</html>