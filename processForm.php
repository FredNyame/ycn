<?php
 //variables
 $name = $email = $message = $success = "";
 //error messsges variable
 $nameErr = $emailErr = $messageErr = '';

 //check if the form was submitted
 if(isset($_POST['submit'])){
   //check if all fields are empty
   if(!empty($_POST['name'])){
     //store variable
     $name = inspectInput($_POST['name']);
     //check if there is only letter and whitespaces
     if(!preg_match("/^[a-zA-Z ]*$/",$name)){
       $nameErr = "Please enter only letters and whitespaces";
     }
     //check the length of the name
     if(strlen($name) <= 3){
     $nameErr = "Your name is too short";
     }
     } else {
     //give error msg if it empty
     $nameErr = "Name field is required";
   }

   if(!empty($_POST['email'])){
     //store variable
     $email = inspectInput($_POST['email']);
     //check if the email is valid one
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $emailErr = "Please enter a valid email";
     }
   } else {
     //give error msg if it empty
     $emailErr = "Email field is required";
   }

   if(!empty($_POST['message'])){
     //store variable
     $message = inspectInput($_POST['message']);
   } else {
     //give error msg if it empty
   $messageErr = "Message field is required";
   }

   //if there is no errors do this
   if($nameErr == "" && $emailErr == "" && $messageErr == ""){
     unset($_POST['submit']);
     //variables to send email
     $mailTo = 'example@gmail.com';
     $mailSubject = 'New Contact Form Message';
     $mailBody = 'A new message from ' .$name. ' and the message reads' . "\r\n".$message;
     $headers = 'From: '. $name ." ".$email . "\r\n";
     $headers .= 'Reply-To: ' . $email;

     //if mail is sent do this
     if(mail($mailTo, $mailSubject, $mailBody, $headers)){
        $success = "Your message was sent, thank you for contacting us";
       //reset all input fields
       $name = $email = $message = "";
     } else{
       $success = "Sorry your message was not sent, try again later";

     }
   }

   $error = ['name' => $nameErr, 'email' => $emailErr, 'message' => $messageErr, 'success'=> $success];
     echo json_encode($error);
 }

 //fucntion to check the data first
 function inspectInput($data){
   $data = trim($data); //trim unneccessary spaces
   $data = stripslashes($data); //takes out \ from the input
   $data = htmlspecialchars($data); //check for cross-site scripting
   return $data;
 }
?>
