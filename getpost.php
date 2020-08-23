<?php 
    if(
        !isset($_GET["id_user"])||
        !isset($_GET["username"])||
        !isset($_GET["email"])||
        !isset($_GET["password"])||
        !isset($_GET["img"])
    ){
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <a href="Db_sb.php" class="btn btn-info">Back</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID USER</th>
                <th scope="col">USERNAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">PASSWORD</th>
                <th scope="col">IMAGE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $_GET["id_user"]; ?></td>
                <td><?= $_GET["username"]; ?></td>
                <td><?= $_GET["email"]; ?></td>
                <td><?= $_GET["password"]; ?></td>
                <td><img src="img/<?= $_GET["img"]?>" alt="gambar" class="img-fluid" width="100"></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
