<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	
		<?php
/*
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("db", "db", "db", "db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
        
        else {
            echo "ok";
        }
        */

	/*
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['Name'];
		$isbn = $_REQUEST['Isbn'];
		$price = $_REQUEST['Price'];
		$category = $_REQUEST['Category_id'];
		$author = $_REQUEST['Author'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO book VALUES ('$name',
			'$isbn','$price','$category','$author')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$name\n $isbn\n "
				. "$price\n $category\n $author");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
      */


      $con = new mysqli('db', 'db', 'db', 'db');



        //$result = mysqli_query($con, "SELECT");


      
        $query = "INSERT INTO book (Name, Isbn, Price, Author) VALUES (?, ?, ?, ?)";

        $stmt = $con->prepare($query);
        $stmt->bind_param("ssss", $Name, $Isbn, $Price, $Author);

        $Name = $_POST['name'];
        $Isbn = $_POST['Isbn'];
        $Price = $_POST['cena'];
        $Author = $_POST['author'];
        
        $stmt->execute();
        

    
    
      /*
      $sql = "INSERT INTO book (name, Isbn) VALUES ('$Name', $Isbn)";

      if(!$mysqli_query($con, $sql))
      {
          echo 'Not Insert';
      }
      else
      {
          echo 'Insert';
      }
*/
      //header("refresh:2; url=index.php")
      



    /*
      if (isset($_POST['submit']))
      {
          if(!empty($_POST['name']) && ($_POST['Isbn']))
          {
            $name=$_POST['name'];
            $isbn=$_POST['Isbn'];

            if(mysql_query("insert into book (Name, Isbn)
            values('$name', '$Isbn')"));
            {
                echo " Your data has been saved into db";
                header("refresh:2; url=index.php");
            }
          }
          else 
          {
              echo "pls fill in the blanks";
          }
      }
*/


		?>
	
</body>

</html>
