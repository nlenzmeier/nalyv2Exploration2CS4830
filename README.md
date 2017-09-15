# **Sending an Email via Personal Website**

###### **Objective:**
This week's exploration goal is to create a modal on my personal website that allows a user to enter in their information and send me a message without have to physically send me an email from their personal email.

###### **Why?**
Overall it will make the communication process much easier if I am ever needed to be reached. It is much easier to send directly from my website than it is to copy my email address, go to their email, type the email up and paste my email address. This will make the user experience much better and easier.

###### **Notice**
This is my personal site that I am building. So there are many files on my Github that are not being used for this exploration. For this exploration I only used files "personal.html" and "test.php". 
The others are for my own personal use. To access this site, please go to http://www.niclenz.me/personal.html 
My Github repository is **nalyv2ExplorationCS4830:** https://github.com/nlenzmeier/nalyv2Exploration1CS4830/blob/master/README.md

###### **Sources**
Besides using my great coworkers with a ton of knowledge, I used a few sources such as:
* https://www.digitalocean.com/community/tutorials/how-to-install-and-configure-postfix-on-ubuntu-16-04

  This link was the biggest component of my exploration. After asking my coworkers which direction I should go with in terms of accomplishing this task, they said to start with PHP. They also noted that I probably had to install and configure postfix on Ubuntu before ever thinking about typing up my PHP.
  With that being my first task, I only had to go into my instance and type:
  * sudo apt-get update
  * sudo install postfix

  Once that was installed, I Googled "How to send an email in PHP." It was pretty easy to find. I then stumbled upon my next link:

* https://www.w3schools.com/php/func_mail_mail.asp

  The code they had presented on the link looked all too simple, which at first it was. So on my main page I created a modal (pop up window) that asked for a user's first and last name, email address, and their comments/concerns. This modal came from my navigation bar I had already created on my main page (personal.html).
  Once they hit "Submit" in the modal it activates my php page that has the email function (test.php) by using the action="test.php" in my form tag.
  From here, I made the PHP file (test.php) to have the following code (making adjustments to their code to fit mine):

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


###### **Recap**
Overall I am very happy with how everything turned out. I did have a few issues, however. 

The first issue was I could not get my PHP to connect. For some odd reason I kept getting "connection 500 errors,"" which made no sense because I had code in my PHP file. I even went to the extent of commenting out all of my code and just echoing a "Hello World!" and I still could not get an error-free page to generate.

For the solution I had to create a new PHP file and name it something different (hence my file being called "test.php" instead of something obvious like "email.php," which is what I originally started with). 

My next problem was getting the format of the email I would receive just right. I soon realized that PHP is very touchy with where I place plain text to concatenate to my message. For example, I have this in my code:

$msg = $firstName." ".$lastName."\nEmail: ".$email."\nMessage: ".$comments;

But when I tried to do this:

$msg = *"Name: "*$firstName." ".$lastName."\nEmail:       ".$email."\nMessage: ".$comments;

It would throw off the entire program. Just adding the **"Name: "** threw off everything, and it took me forever to figure out that was what caused the crashing my website. 

In conclusion, this was a very fun activity and think I will use this code for future projects. It is a fun little gadget to have and is very practical to use!

###### **Proof It Works**

Here is the modal:
www.niclenz.me/images/modal.png

Here is the email received:
www.niclenz.me/images/email.png



        






        
        






        
        
