<?php

if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);

    sendConfirmationEmail($email);

    echo 'Form submitted successfully. You will receive a confirmation email shortly.';
}

function sendConfirmationEmail($email)
{
    $to = $email;
    $subject = 'Confirmation: We will be in touch soon';
    $message = "
        Dear User,
        
        Thank you for contacting us. We have received your form submission and will be in touch with you within a few hours.
        
        Best regards,
        Your Company
    ";


    $headers = "From: devblade10@gmail.com";

    // Set the authentication details

    
    if(mail($to, $subject, $message, $headers)){
        echo "email sent successfully";
    }
    else {
        echo "email not sent";
    }

}
?>
