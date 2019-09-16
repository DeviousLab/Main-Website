<?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "admin@deviouslab.com";
        $headers = "A message from ".$mailFrom;
        $txt = "You have got a new message from ".$name.".\n\n".$message;

        mail($mailTo,$subject,$txt,$headers);
        header("Location: index.php?mailsend");
    }