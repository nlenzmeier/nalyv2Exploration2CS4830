<?php

    //echo 'Hello THERE!'
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo'I am in the IF statement!';
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $comments = $_POST["comments"];

        $msg = $firstName." ".$lastName."\nEmail: ".$email."\nMessage: ".$comments;

        // send email
        mail("niclenz@hotmail.com","Niclenz.me Contact",$msg);
        
        header('Location: personal.html');
        exit;
    }
    else {
        echo 'No';
    }
?>