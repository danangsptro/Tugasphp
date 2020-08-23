<?php 
    $sb = [
        [
            "id_user" => "001",
            "username" => "danangsptro",
            "email" => "danang@gmail.com",
            "password" => "112233",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "002",
            "username" => "kangkung",
            "email" => "kangkung@gmail.com",
            "password" => "223344",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "003",
            "username" => "sawiijo",
            "email" => "sawiijo@gmail.com",
            "password" => "334455",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "004",
            "username" => "manggis",
            "email" => "manggis@gmail.com",
            "password" => "445566",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "005",
            "username" => "jeruk",
            "email" => "jeruk@gmail.com",
            "password" => "556677",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "006",
            "username" => "apple",
            "email" => "apple@gmail.com",
            "password" => "667788",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "007",
            "username" => "anggur",
            "email" => "anggur@gmail.com",
            "password" => "778899",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "008",
            "username" => "sptro",
            "email" => "sptro@gmail.com",
            "password" => "889900",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "009",
            "username" => "jeruk",
            "email" => "danang@gmail.com",
            "password" => "112233",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "010",
            "username" => "melon",
            "email" => "melon@gmail.com",
            "password" => "001112",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "011",
            "username" => "tro",
            "email" => "tro@gmail.com",
            "password" => "111213",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "012",
            "username" => "danangsptro",
            "email" => "danang@gmail.com",
            "password" => "112233",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "013",
            "username" => "mexmew",
            "email" => "mexmew@gmail.com",
            "password" => "131415",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "014",
            "username" => "rambutan",
            "email" => "rambu@gmail.com",
            "password" => "141516",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "015",
            "username" => "markisa",
            "email" => "markisa@gmail.com",
            "password" => "151617",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "016",
            "username" => "bewok",
            "email" => "bewok@gmail.com",
            "password" => "161718",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "017",
            "username" => "kuko",
            "email" => "@gmail.com",
            "password" => "171819",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "018",
            "username" => "sabi",
            "email" => "sabi@gmail.com",
            "password" => "181920",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "019",
            "username" => "srigala",
            "email" => "srigala@gmail.com",
            "password" => "192021",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "020",
            "username" => "maung",
            "email" => "maung@gmail.com",
            "password" => "202122",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "021",
            "username" => "sayur",
            "email" => "sayur@gmail.com",
            "password" => "212223",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "024",
            "username" => "buahan",
            "email" => "buahan@gmail.com",
            "password" => "242526",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "025",
            "username" => "singa",
            "email" => "singa@gmail.com",
            "password" => "252627",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "027",
            "username" => "tiger",
            "email" => "tiger@gmail.com",
            "password" => "262728",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "028",
            "username" => "kuda",
            "email" => "kuda@gmail.com",
            "password" => "282930",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "029",
            "username" => "kucing",
            "email" => "kucing@gmail.com",
            "password" => "293031",
            "img" => "blak.jpg"
        ],
        [
            "id_user" => "030",
            "username" => "leci",
            "email" => "leci@gmail.com",
            "password" => "303132",
            "img" => "blak.jpg"
        ],
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Db_sb</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">
                        <h1>Database Starbucks</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($sb as $sbx) :?>
                    <tr>
                        <td>id_user: <a href="getpost.php?username= <?php echo $sbx["username"]; ?> &id_user= <?=$sbx["id_user"]; ?> &email= <?=$sbx["email"]; ?> &password= <?= $sbx["password"]; ?>&img=<?= $sbx["img"]; ?>"><?= $sbx["id_user"]; ?></a><br>username : <?= $sbx["username"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    
</body>
</html>