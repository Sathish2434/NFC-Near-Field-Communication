<?php include("connect.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Health Details Form</title>
    <link rel="stylesheet" href="style.css">
    

    
</head>
<body>
    

    <h2 style="text-align: center; color: rgb(213, 133, 28);">Patient Health Details Form</h2>

    <form action="patient.php" method="POST">
        <div class="section">
            <h3>Personal ID</h3>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="medical_id">Medical ID:</label>
                <input type="text" id="medical_id" name="medical_id" required>
            </div>
        </div>

        <div class="section">
            <h3>Vital Signs</h3>
            <div class="form-group">
                <label for="blood_pressure">Blood Pressure:</label>
                <input type="text" id="blood_pressure" name="blood_pressure" required>
            </div>
            <div class="form-group">
                <label for="heart_rate">Heart Rate:</label>
                <input type="number" id="heart_rate" name="heart_rate" required>
            </div>
            <div class="form-group">
                <label for="respiratory_rate">Respiratory Rate:</label>
                <input type="number" id="respiratory_rate" name="respiratory_rate" required>
            </div>
            <div class="form-group">
                <label for="temperature">Temperature:</label>
                <input type="number" step="0.1" id="temperature" name="temperature" required>
            </div>
        </div>

        <div class="section">
            <h3>Blood Sugar Levels</h3>
            <div class="form-group">
                <label for="fasting_glucose">Fasting Blood Glucose:</label>
                <input type="number" id="fasting_glucose" name="fasting_glucose" required>
            </div>
            <div class="form-group">
                <label for="postprandial_glucose">Postprandial Blood Glucose:</label>
                <input type="number" id="postprandial_glucose" name="postprandial_glucose" required>
            </div>
            <div class="form-group">
                <label for="hba1c">HbA1c:</label>
                <input type="number" step="0.1" id="hba1c" name="hba1c" required>
            </div>
        </div>

        <div class="section">
            <h3>Medication and Dosages</h3>
            <div class="form-group">
                <label for="medication_1">Medication 1:</label>
                <input type="text" id="medication_1" name="medication_1">
            </div>
            <div class="form-group">
                <label for="medication_1_dosage">Dosage:</label>
                <input type="text" id="medication_1_dosage" name="medication_1_dosage">
            </div>
            <div class="form-group">
                <label for="medication_2">Medication 2:</label>
                <input type="text" id="medication_2" name="medication_2">
            </div>
            <div class="form-group">
                <label for="medication_2_dosage">Dosage:</label>
                <input type="text" id="medication_2_dosage" name="medication_2_dosage">
            </div>
        </div>

        <div class="section">
            <h3>Medical History</h3>
            <div class="form-group">
                <label for="medical_history">Medical History:</label>
                <textarea id="medical_history" name="medical_history" rows="4" cols="100"></textarea>
            </div>
        </div>

        <div class="section">
            <h3>Allergies</h3>
            <div class="form-group">
                <label for="allergies">Allergies:</label>
                <textarea id="allergies" name="allergies" rows="4" cols="100" required></textarea>
            </div>
        </div>

        <div class="section">
            <h3>Recent Lab Results</h3>
            <div class="form-group">
                <label for="lab_results">Lab Results:</label>
                <textarea id="lab_results" name="lab_results" rows="4" cols="100" required></textarea>
            </div>
        </div>

        <div class="section">
            <h3>Symptoms and Observations</h3>
            <div class="form-group">
                <label for="symptoms">Recent Symptoms:</label>
                <textarea id="symptoms" name="symptoms" rows="4" cols="100" required></textarea>
            </div>
            <div class="form-group">
                <label for="observations">Other Observations:</label>
                <textarea id="observations" name="observations" rows="2" cols="100" required></textarea>
            </div>
        </div>

        <div class="section">
            <h3>Scheduled Appointments and Follow-Ups</h3>
            <div class="form-group">
                <label for="appointments">Upcoming Appointments:</label>
                <textarea id="appointments" name="appointments" rows="2" cols="100" required></textarea>
            </div>
        </div>

        <div class="section">
            <h3>Emergency Contact Information</h3>
            <div class="form-group">
                <label for="primary_contact">Primary Contact:</label>
                <input type="text" id="primary_contact" name="primary_contact" required>
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="tel" id="contact_number" name="contact_number" required>
            </div>
        </div>

        <input type="submit" class="submit" name='submit' value='submit'>
    </form>
</body>
</html>

<?php 


    if($_POST['submit'])
    {
        $name          = $_POST['name'];
        $medical_id           = $_POST['medical_id'];
        $blood_pressure         = $_POST['blood_pressure'];
        $heart_rate        = $_POST['heart_rate'];
        $respiratory_rate        = $_POST['respiratory_rate'];
        $temperature          = $_POST['temperature'];
        $fasting_glucose     = $_POST['fasting_glucose'];
        $postprandial_glucose = $_POST['postprandial_glucose'];
        $hba1c = $_POST['hba1c'];
        $medication_1 = $_POST['medication_1'];
        $medication_1_dosage = $_POST['medication_1_dosage'];
        $medication_2 = $_POST['medication_2'];
        $medication_2_dosage = $_POST['medication_2_dosage'];
        $medical_history = $_POST['medical_history'];
        $allergies = $_POST['allergies'];
        $lab_results = $_POST['lab_results'];
        $symptoms = $_POST['symptoms'];
        $observations = $_POST['observations'];
        $appointments = $_POST['appointments'];
        $primary_contact = $_POST['primary_contact'];
        $contact_number = $_POST['contact_number'];
        
        

        $query = "INSERT INTO PATIENT VALUES('$name', '$medical_id', '$blood_pressure','$heart_rate','$respiratory_rate','$temperature','$fasting_glucose' 
        '$postprandial_glucose', '$hba1c', '$medication_1', '$medication_1_dosage', '$medication_2','$medication_2_dosage','$medical_history',
        '$allergies','$lab_results','$symptoms','$observations','$appointments','$primary_contact','$contact_number')";
        $data = mysqli_query($con,$query);
        
        if($data)
        {
          echo "Data Inserted into DataBase";
          header("location: last.php");
        }
        else
        {
          echo "Failed";
        }
    }
?>