<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	
    <?php

    $con = new mysqli('db', 'db', 'db', 'db');

    $Name = $_POST['name'];
    $Isbn = $_POST['Isbn'];
    $Price = $_POST['cena'];
    $Author = $_POST['author'];
    $CategoryID = $_POST['category'];

    $query = "INSERT INTO book (Name, Isbn, Price, Author, Category_id) VALUES (?, ?, ?, ?, ?)";

    $stmt = $con->prepare($query);
    $stmt->bind_param("ssssi", $Name, $Isbn, $Price, $Author, $CategoryID);
    $stmt->execute();

    if($stmt){
        echo '<div class="added">' . 'Your data has been added';
    }
    else{
        echo "Error";
    }

    header("refresh:2; url=index.php")

    ?>
	
</body>

</html>
