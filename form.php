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

  /*
  $sql = "SELECT ID, Name FROM categery";
  $result = $conn->query($sql);


      $book = [];

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $book [] = $row;
    }
    echo $book[0]['Category_id'];
  } 
  $conn->close();
  */
  
  /*
  SELECT book.*, category.Name AS category
  FROM category
  LEFT JOIN book ON book.Category_id = book.Category_id;
  */
  $sql = "SELECT book.*, category.Name AS category 
  FROM book LEFT JOIN category ON book.Category_id = category.ID;";
  $result = $conn->query($sql);

  var_dump($result->fetch_assoc());

  if ($result->num_rows > 0) {
    echo "<table class='table answer'>";
      echo "<tr>";
      echo '<th>' . 'Meno' . '</th>' . '<th>' . 'Isbn' . '</th>' . '<th>' . 'Cena' . '</th>' . '<th>' . 'Category' . '</th>' . '<th>' . 'Autor' . '</th>';
      echo "</tr>";
    echo "</table>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

      echo "<table class='table table-striped answer'>";
        echo "<tr>";
        //echo $row["ID"]. " " . $row["Name"].  " " . $row["Isbn"]. " " . $row["Price"]. " " . $row["Category_id"]. " " . $row["Author"]. "<br>";
          echo '<td>' . $row["Name"] . '</td>' . '<td>' . $row["Isbn"]. '</td>' . '<td>' . $row["Price"]. '</td>' . '<td>' . $row["category"] . '</td>' . '<td>'. $row["Author"] . '</td>' . "<br>";
        echo "</tr>";
      echo "</table>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>

</body>
</html>