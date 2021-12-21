<?php 

    $dbServername = "db";
    $dbUsername = "db";
    $dbPassword = "db";
    $dbname = "db";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);

    if (!$conn) {
        echo 'Something is wrong';
    }else{
        echo 'Nice, database connected successfully'. "<br>";
    }

    $sql = "SELECT ID, Name, Isbn, Price, Category_id, Author FROM book";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["ID"]. " " . $row["Name"].  " " . $row["Isbn"]. " " . $row["Price"]. " " . $row["Category_id"]. " " . $row["Author"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>