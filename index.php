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
    <script defer src="index.js"></script>
    <title>Kniznica</title>
</head>
<body>
    <div class="container">
        <h1>Kniznica</h1>
    
        <form action="insert.php" method="post" class="form-horizontal" id="form">
            <div class="form-group">
                <div class="col-sm-6">
                <div class="input-control">
                    <input type="text" class="form-control" id="nazov" name="name" placeholder="Nazov knihy">
                    <div class="error"></div>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                <div class="input-control">
                    <input id="ISBN" type="text" class="form-control" name="Isbn" placeholder="ISBN">
                    <div class="error"></div>
                </div>
                </div>
                <div class="col-xs-3">
                <div class="input-control">
                    <input id="cena" type="text" class="form-control" name="cena" placeholder="Cena">
                    <div class="error"></div>
                </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-xs-3">
                    <select class="form-control" name="category">
                    <option>Please select category</option>
                        <?php foreach($result as $key => $value){ ?>
                            <option value="<?= $value['ID'];?>"><?= $value['Name']; ?></option> 
                        <?php } ?>
                    </select>
                    </div>
                <div class="col-xs-3">
                <div class="input-control">
                    <input id="autor"type="text" class="form-control" name="author" placeholder="Autor">
                    <div class="error"></div>
                </div>
                </div>
            </div><br>
            
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                    <button type="submit" name="submit" value= "Submit" class="btn btn-default">Pridaj do kniznice</button>
                </div>
            </div>
        </form>
        <hr>
        <?php
            include 'form.php';
        ?>
    </div>
    
</body>
</html>