<?php
    $valid_username = "adeli";
    $valid_username = "Ozan";

    $username = $_GET['name'];
    $password = $_GET['Password'];

$status = "";

    // if($username == $valid_username && $password == $valid_username){
    //     echo "Sukses";}
    //     else{
    //         echo "tolol";
    //     }

    if ($_REQUEST['GET']){
        if($username == $valid_username && $password == $valid_username){
             echo "Sukses";}
                 else{
                     echo "tolol";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<php? if($status):?>

    <form action="">
        <label for="name">Nama</label>
        <input type="text" name="name">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password">
    </form>
    
</body>
</html>