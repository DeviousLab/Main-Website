<?php
if(isset($_POST['Submit'])) {
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject']; // not required
    $message = $_POST['message']; // required
 
    $mailto = "admin@deviouslab.com";
    $headers = "From: ".$email_from;
    $email_message = "You have received mail from ".$name.".\n\n".$message;

    mail($mailto, $subject, $email_message, $headers);  
    header("Location: index.html");
}
?>