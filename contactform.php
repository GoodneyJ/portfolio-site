<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "jarrod.goodney@jarrodg.dev";
    $headers = "From: ".$mailFrom;
    $txt = "You've received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    
    echo "<h2>Email Sent!</h2>";
    echo "<p> Return to my <a href='https://jarrodg.dev/'>site</a>";

    
}