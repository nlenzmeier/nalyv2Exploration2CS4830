# ** Sending an Email via Personal Website **

###### Objective:
This week's exploration goal is to create a modal on my personal website that allows the user to enter in their information and send me a message without have to physically send me an email from their personal email.

###### Why?
Overall it will make the communication process much easier if I am ever needed to be reached. It is much easier to send directly from my website than it is to copy my email address, go to their email, type it up and paste me address. This will make the user experience much better.

###### Sources:
Besides using my great coworkers with a ton of knowledge, I used a few sources such as:
* https://www.digitalocean.com/community/tutorials/how-to-install-and-configure-postfix-on-ubuntu-16-04

  This link was the biggest component of my exploration. After asking my coworkers which direction I should go with, they said to start with PHP, but that I probably had to to install and configure postfix on Ubuntu because ever thinking about typing up my PHP.
  With that I only had to go into my instance and type:
  * sudo apt-get update
  * sudo install postfix

  Once that was installed, I Googled "How to send an email in PHP." Pretty easy to find something after that. I then stumbled upon my next link

* https://www.w3schools.com/php/func_mail_mail.asp

  This all looked way too simple, which at first it was. So on my main page I created a modal (pop up window) that asked for a user's first and last name, email address, and their comments/concerns.
  Once they hit submit it directs them to my php page that has the email function.
  From here, I made a PHP file called "test.php" to have the following code:

      <?php
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo'I am in the IF statement!';
        //grab info from modal
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $comments = $_POST["comments"];
        //concatenate into one variable
        $msg = $firstName." ".$lastName."\nEmail: ".$email."\nMessage: ".$comments;
        // send email
        mail("niclenz@hotmail.com","Niclenz.me Contact",$msg);
        //redirect back to main page
        header('Location: personal.html');
        exit;
        }
      else {
        echo 'No';
        }
        ?>
