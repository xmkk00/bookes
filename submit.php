<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    
    // Perform any necessary processing or database operations with the submitted data.
    
    // Redirect the user back to the contact page after submission.
    header("Location: contact.html");
    exit();
?>
