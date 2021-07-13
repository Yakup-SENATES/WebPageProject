<?php  

    $db_server="localhost";
    $db_user="yakup";
    $db_pass="yakup0101";
    $db ="paylastikca";
    $conn= mysqli_connect($db_server,$db_user,$db_pass,$db);
    
    if ($conn) {
        echo "Bağlantı sağlantı";
    }else {
        die ("bağlantı hatası".mysqli_connect_error());
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>