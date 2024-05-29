<?php include("connection.php")



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Patient Details Form</title>
<link rel="stylesheet" href="signin.css">
</head>
<body>
<h2>Patient Details Form</h2>
<form action="#" method="POST">
  <label for="fullname">Full Name:</label><br>
  <input type="text" id="fullname" name="fname" required><br><br>
  
  <label for="age">Age:</label><br>
  <input type="number" id="age" name="age"  required><br><br>
  
  <label for="gender">Gender:</label><br>
  <select id="gender" name="gender" required>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="female">Trans</option>
  </select><br><br>
  
  <label for="address">Address:</label><br>
  <textarea id="address" name="address" rows="4" cols="50" required></textarea><br><br>
  
  <label for="contact">Contact Number:</label><br>
  <input type="tel" id="contact" name="contact" pattern="[0-9]{10}" required><br><br>
  
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br><br>
  
  <label for="bloodgroup">Blood Group:</label><br>
  <input type="text" id="bloodgroup" name="bloodgroup" required><br><br>
  
  <label for="medicalhistory">Medical History:</label><br>
  <textarea id="medicalhistory" name="medicalhistory" rows="4" cols="50"></textarea><br><br>
  
  <input type="submit" value="Submit" name="submit" class="submit">
  <a href="logout.php" class="logout">Logout</a>
  
</form>
</body>
</html>
<?php
    if($_POST['submit'])
    {
        $fname          = $_POST['fname'];
        $age            = $_POST['age'];
        $gender         = $_POST['gender'];
        $Address        = $_POST['Address'];
        $contact        = $_POST['contact'];
        $email          = $_POST['email'];
        $bloodgroup     = $_POST['bloodgroup'];
        $medicalhistory = $_POST['medicalhistory'];

        $query = "INSERT INTO PATIENT VALUES('$fname', '$age', '$gender', 
        '$Address', '$contact', '$email', '$bloodgroup', '$medicalhistory')";
        $data = mysqli_query($conn,$query);
        
        if($data)
        {
          echo "Data Inserted into DataBase";
          header("location: submit.php");
        }
        else
        {
          echo "Failed";
        }
    }
?>