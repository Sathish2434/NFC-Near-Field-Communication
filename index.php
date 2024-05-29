<?php
error_reporting(0);
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "user";

    $data = mysqli_connect($servername,$username,$password,$dbname);

    if($data==false)
    {
        die("connection Error");
    }

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $username=$_POST["username"];
		$password=$_POST["password"];

		$sql="select * from login where username= '".$username."' AND password= '".$password."' ";

		$result=mysqli_query($data, $sql);

		$row=mysqli_fetch_array($result);

		if($row["usertype"]=="user")
		{
			$_SESSION["usertype"]=$username;
			header("location: userhome.php");
		}
		elseif($row["usertype"]=="admin")
		{
			$_SESSION["username"]=$username;
			header("location: signin.php");
		}

		else{
			echo "Username or Password Incorrect";
		}

    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combined Page</title>
    <link rel="stylesheet" href="sidebar.css">
    <link href="nfs.css" rel="stylesheet">
    
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="img js-fullheight" style="background-image: url(bg.jpg);">
    <nav>
        <div class="sidebar-header">
            <a class="logo-wrapper">
                <img src="logo1.png" width="50px" alt="Logo">
                <h3 class="hidden" style="font-size: 25px; color: white; font-family: arial;">WELLCOME</h3>
            </a>
            <button class="toggle-btn">
                <i class="fa-solid fa-bars" width="10px"></i>
            </button>
        </div>

        <div class="sidebar-links">
            <a href="index.php" class="link active">
                <i class="fa-solid fa-house"></i>
                <span class="hidden">Home</span>
            </a>
            <a href="About.html" class="link active">
                <i class="fa-solid fa-info"></i>
                <span class="hidden">About</span>
            </a>
            <a href="Contact.html" class="link active">
                <i class="fa-solid fa-phone"></i>
                <span class="hidden">Contact</span>
            </a>
			<a href="sam.html" class="link active">
				<i class="fa-solid fa-file"></i>
                <span class="hidden">Records</span>
            </a>
        </div>

        <div class="sidebar-bottom">
            <div class="sidebar-links">
                <a class="link" href="new account.php">
                    <i class="fa-solid fa-user"></i>
                    <span class="hidden">New Account</span>
                </a>
            </div>

            <div class="user-profile">
                <div class="user-avatar">
                    <img src="download.png" style="font-size: 10px;">
                </div>

                <div class="user-details hidden">
                    <p class="username">OUR TEAM</p>
                    <p class="user-email">sathishs@gmail.com</p>
                </div>
            </div>
        </div>
    </nav>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">ACCESS INFO</h3>
                        <form action="#" method="POST" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="username"
                                    required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" name="password"
                                    placeholder="Password" required tranprant>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                            </div>
                        </form>
                        <div class="w-100 text-center">
                            <a href="password.html" style="color: #fff">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="sidebar.js"></script>
    <script src="jquery.min.js"></script>
    <script src="popper.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>

</html>

