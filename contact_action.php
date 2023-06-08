<?php
        include_once "./connection.php";
        if (isset($_POST['submit'])) {

        
        $contact_name=mysqli_real_escape_string($conn,$_POST['name']);
        
        $contact_surname=mysqli_real_escape_string($conn,$_POST['surname']);
        
        $contact_email=mysqli_real_escape_string($conn,$_POST['email']);
        
        $contact_subject=mysqli_real_escape_string($conn,$_POST['subject']);
        
        $contact_message=mysqli_real_escape_string($conn,$_POST['message']);

        
        $contact_query="INSERT INTO `Contact_table`( `Name`, `Surname`, `Email`, `Subject`, `Message`)         
        VALUES ('$contact_name','$contact_surname','$contact_email','$contact_subject','$contact_message')";

        
        $send_contact_message=mysqli_query($conn,"$contact_query");
        if (!$send_contact_message) {
            # code...
            echo "Not sent";
        }
        else {
            
            header("Location:./index.php#contact");
        }

    }



?>