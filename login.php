<?php 
include('dbhelper.php');
    if (isset($_POST['submit'])) {
    session_start();
    $user=$_POST['user'];
    $pass=$_POST['pass'];

      // write query
    $sql = "select * from members where username='$user' and pass='$pass'";
    
    // get the result set (set of rows)
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result)==1) {
        echo "You have succesfully logged in";

    	// free the $result from memory 
	    mysqli_free_result($result);

	    // close connection
	    mysqli_close($conn);   

        $_SESSION['user']=$_POST['user'];
        header("location:panel.php");

    }else {
            echo "<script>alert('kullancı adı veya sifre hatalı')</script>";
        }
    
    }


?>



<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="POST" style="max-width:500px;margin:auto">
        <h2>Login Form</h2>
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Username" name="user">
        </div>



        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="pass">
        </div>

        <button type="submit" name="submit" class="btn">Login</button>
    </form>

</body>

</html>