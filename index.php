<?php
include_once 'database.php';
    $select = "SELECT Name, ID FROM category";
    $result = mysqli_query ($connection, $select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Kniznica</title>
</head>
<body>
    <div class="container">
        <h1>Kniznica</h1>
    
        <form action="insert.php" method="post" class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nazov" name="name" placeholder="Nazov knihy">
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <input type="text" class="form-control" name="Isbn" placeholder="ISBN">
                </div>
                <div class="col-xs-3">
                    <input type="text" class="form-control" name="cena" placeholder="Cena">
                </div>
            </div><br>

            <div class="row">
                <div class="col-xs-3">
                    <select class="form-control" name="category">
                        <?php foreach($result as $key => $value){ ?>
                            <option value="<?= $value['ID'];?>"><?= $value['Name']; ?></option> 
                        <?php } ?>
                    </select>
                    </div>
                <div class="col-xs-3">
                    <input type="text" class="form-control" name="author" placeholder="Autor">
                </div>
            </div><br>
            
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                    <button type="submit" name="submit" value= "Submit" class="btn btn-default">Pridaj do kniznice</button>
                </div>
            </div>
            <hr>
        </form>
        <?php
            include 'form.php';
        ?>
    </div>
</body>
</html>