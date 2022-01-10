<?php

    $servername     =   'db';
    $username       =   'db';
    $password       =   'db';
    $dbname         =   "db";
    $connection     =   mysqli_connect($servername, $username, 
    $password,"$dbname");
    if(!$connection)
    {
      die('Could not Connect My Sql:' .mysql_error());

    }