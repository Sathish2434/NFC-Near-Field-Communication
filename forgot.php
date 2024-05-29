<?php
error_reporting(0);
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "user";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        echo "Connection ok";
    }
    else
    {
        echo "Connection Failed".mysqli_connect_error();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Hospital</title>
</head>
<body>
    <header>
        <h1>Forgot Password</h1>
    </header>
    <main>
        <section>
            <h2 style="text-align: center; color: white;">Fill out the Form:</h2>
            <form action="#" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="Enter Your Username">
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password" required placeholder="Enter New Password">
                <label for="Usertype">Usertype:</label>
                <input type="text" name="usertype" id="usertype" required>
                <input type="submit" class="ss" name="submit" id="submit" value="submit">
            </form>
        </section>
    </main>
    <footer>
        <p style="text-align: center; color: white;">&copy; 2024 Hospital Name</p>
    </footer>
</body>
</html>



<?php
    if($_POST['submit'])
    {
        $username          = $_POST['username'];
        $password          = $_POST['password'];
        $usertype          = $_POST['usertype'];


        $query = "INSERT INTO LOGIN VALUES('$username', '$password', '$usertype')";
        $data = mysqli_query($conn,$query);

                if($data)
        {
          echo "Data Inserted into DataBase";
          header("location: index.php");
        }
        else
        {
          echo "Failed";
        }
    }
?>