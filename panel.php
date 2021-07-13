
<?php 

//to prevent unauthorized access
session_start();

if ($_SESSION['user']===NULL) {
    echo "<script>window.location.href='exit.php'</script>";
}
else {
    
include("dbhelper.php");

// write query for all entitys
$sql="select *from iletisim";

// get the result set (set of rows)
$result = mysqli_query($conn,$sql);

//another way of result ->  $result =$conn->query($sql); 

// fetch the resulting rows as an array
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

// free the $result from memory (good practise)
mysqli_free_result($result);

// close connection
mysqli_close($conn); 

// print_r($pizzas);
//print_r($data);

    
}


?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/panel.css">
</head>

<body>

    <table id="customers">
        <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>No</th>
            <th>Header</th>
            <th>Message</th>
        </tr>

        <?php foreach ($data as $data): ?>
            <tr>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['no'] ?></td>
                <td><?php echo $data['about'] ?></td>
                <td><?php echo $data['mesaj'] ?></td>
            </tr>

         <?php endforeach; ?>

    </table>

</body>

</html>



	
