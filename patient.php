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