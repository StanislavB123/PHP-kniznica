<?php
    include 'form.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Kniznica</title>
</head>
<body>
    <div class="container">
        <h1>Kniznica</h1>
    
        <form class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nazov" placeholder="Nazov knihy">
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <input type="text" class="form-control" placeholder="ISBN">
                </div>
                <div class="col-xs-3">
                    <input type="text" class="form-control" placeholder="Cena">
                </div>
            </div><br>

            <div class="row">
                <div class="col-xs-3">
                        <select class="form-control" name="category" id="category">
                            <option value="roman">Roman</option>
                            <option value="triller">Triller</option>
                            <option value="fantasy">Fantasy</option>
                            <option value="rozpravka">Rozpravka</option>
                        </select>
                    </div>
                <div class="col-xs-3">
                    <input type="text" class="form-control" placeholder="Autor">
                </div>
            </div><br>
            
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                    <button type="submit" class="btn btn-default">Pridaj do kniznice</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>