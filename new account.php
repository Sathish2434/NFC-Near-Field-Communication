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
    <title>Create New Account - Hospital</title>
    
    <style>
        body {
            background-image: url("hos.jpg");
            background-size: cover;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-image: transparent;
    color: white;
    text-align: center;
    padding: 20px 0;
}

main {
    padding: 20px;
}

section {
    margin-bottom: 30px;
}

h2 {
    color: #007bff;
}

form {
    font-family: crimson text;
    color: white;
    display: flex;
    flex-direction: column;
    max-width: 300px;
    margin: 0 auto;
}

label {
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"],
input[type="submit"] {
    margin-bottom: 15px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    transition: border-color 0.3s;
}

input[type="text"]:focus,
input[type="password"]:focus {
    outline: none;
    border-color: #007bff;
}

input[type="submit"] {
    background-color: #007bff;
    color: white;
    cursor: pointer;
    border: none;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.ss:hover{
    background-color: blue;
}
.ss{
    padding: 15px 30px;
    border: 10px soild;
    border-image: linear-gradient(yellow, blue) 1;
    clip-path: inset(0 round 10px);
}
    </style>
</head>
<body>
    <header>
        <h1>Create New Account</h1>
    </header>
    <main>
        <section>
            <h2 style="text-align: center; color: white;">Fill out the Form:</h2>
            <form action="#" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
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