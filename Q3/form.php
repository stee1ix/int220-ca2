<?php

function validate_mobile($mobile) {
    return preg_match('/^[0-9]{10}+$/', $mobile);
}

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if (isset($_POST['submit'])) {    
    if (empty($_POST['Username']) || empty($_POST['Password']) || empty($_POST['Email']) || empty($_POST['Phone'])) {
        $error = "Please fill out all the boxes";

        echo $error;
    } else {
        $valid = true;

        if (!validate_email($_POST['Email'])) {
            $valid = false;
            echo "Enter email in correct format";
        }
        
        if (!validate_mobile($_POST['Phone'])) {
            $valid = false;
            echo "Enter phone number in correct format";
        }

        if ($valid) {
            mail($_POST['Email'], "Confirmation Email", "Your form has been succesfully submitted");

            echo "Email sent!";
        }

    }
}

?>