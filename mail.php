<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

include 'components/connect.php';
session_start();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = ($_POST['number']);
    $inquiry = ($_POST['demo']);
    $inquiry = filter_var($inquiry, FILTER_SANITIZE_STRING);
    $desc = ($_POST['message']);
    $desc = filter_var($desc, FILTER_SANITIZE_STRING);
    // $role = "general";
    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select_user->execute([$email]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);
 
    // if($select_user->rowCount() > 0){
    //    $message[] = 'email already exists!';
    // }else{
      
          $insert_user = $conn->prepare("INSERT INTO `users`(name, email, number, inquiry, message) VALUES(?,?,?,?,?)");
          $insert_user->execute([$name, $email, $number, $inquiry, $desc]);
            $_SESSION['success'] = 'Thanks for contacting us, We will contact you soon';
             $toEmail = $email;
             $emailSubject = 'New email from your contaсt form';
         
               // Create a new PHPMailer instance
                 $mail = new PHPMailer(true);
                 try {
                     // Configure the PHPMailer instance
                     $mail->isSMTP();
                     $mail->Host = 'smtp.googlemail.com';
                     $mail->SMTPAuth = true;
                     $mail->Username = 'activarmor.test@gmail.com';
                     $mail->Password = 'ynwqbrlxsvwumfqf';
                     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                     $mail->Port = 587;
         
                     // Set the sender, recipient, subject, and body of the message
                     $mail->setFrom($email);
                     $mail->addAddress($toEmail);
                     $mail->Subject = $emailSubject;
                     $mail->isHTML(true);
                     $mail->Body = "<p>Name: {$name}</p><p>Email: {$email}</p><p>Message: {$desc}</p>";
         
                     // Send the message
                     $mail->send();
         
                     $successMessage = "Thank you for contacting us :)";
                 } catch (Exception $e) {
               $errorMessage = "<p style='color: red;'>Oops, something went wrong. Please try again later</p>";
             }
             
         
             header('location:contact.php');
          
       
    // }
 
 }



 if(isset($_POST['PubSubmit'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = sha1($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $number = ($_POST['number']);
    $what_monetize = ($_POST['demoQ']);
    // $what_monetize = filter_var($what_monetize, FILTER_SANITIZE_STRING);
    $business_name = ($_POST['business_name']);
    $business_name = filter_var($business_name, FILTER_SANITIZE_STRING);
    $business_address = ($_POST['business_address']);
    $business_address = filter_var($business_address, FILTER_SANITIZE_STRING);
    $city = ($_POST['city']);
    $city = filter_var($city, FILTER_SANITIZE_STRING);
    $state = ($_POST['state']);
    $state = filter_var($state, FILTER_SANITIZE_STRING);
    $zip_code = ($_POST['zip']);
    $zip_code = filter_var($zip_code, FILTER_SANITIZE_STRING);
    $role = "pub";

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select_user->execute([$email]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);
 
    // if($select_user->rowCount() > 0){
    //    $message[] = 'email already exists!';
    // }else{
      
          $insert_user = $conn->prepare("INSERT INTO `publishers_advertiser`(name, email,password, number, what_monetize, business_name,business_address,city,state,zip_code, role) VALUES(?,?,?,?,?,?, ?,?,?,?,?)");
          $insert_user->execute([$name, $email,$pass, $number, $what_monetize, $business_name, $business_address, $city, $state, $zip_code,$role]);
          $_SESSION['successPub'] = 'Thanks for contacting us, We will contact you soon';
             $toEmail = $email;
             $emailSubject = 'New email from your contaсt form';
         
               // Create a new PHPMailer instance
                 $mail = new PHPMailer(true);
                 try {
                     // Configure the PHPMailer instance
                     $mail->isSMTP();
                     $mail->Host = 'smtp.googlemail.com';
                     $mail->SMTPAuth = true;
                     $mail->Username = 'activarmor.test@gmail.com';
                     $mail->Password = 'ynwqbrlxsvwumfqf';
                     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                     $mail->Port = 587;
         
                     // Set the sender, recipient, subject, and body of the message
                     $mail->setFrom($email);
                     $mail->addAddress($toEmail);
                     $mail->Subject = $emailSubject;
                     $mail->isHTML(true);
                     $mail->Body = "<p>Name: {$name}</p><p>Email: {$email}</p><p>Message: {$what_monetize}</p>";
         
                     // Send the message
                     $mail->send();
         
                     $successMessage = "<p style='color: green;'>Thank you for contacting us :)</p>";
                 } catch (Exception $e) {
               $errorMessage = "<p style='color: red;'>Oops, something went wrong. Please try again later</p>";
             }
          
         
             header('location:publishers.php');
          
       
    // }
 
 }
 
 
 if(isset($_POST['AdvSubmit'])){
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = sha1($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $number = ($_POST['number']);
    $what_monetize = ($_POST['demoQ']);
    // $what_monetize = filter_var($what_monetize, FILTER_SANITIZE_STRING);
    $business_name = ($_POST['business_name']);
    $business_name = filter_var($business_name, FILTER_SANITIZE_STRING);
    $business_address = ($_POST['business_address']);
    $business_address = filter_var($business_address, FILTER_SANITIZE_STRING);
    $city = ($_POST['city']);
    $city = filter_var($city, FILTER_SANITIZE_STRING);
    $state = ($_POST['state']);
    $state = filter_var($state, FILTER_SANITIZE_STRING);
    $zip_code = ($_POST['zip']);
    $zip_code = filter_var($zip_code, FILTER_SANITIZE_STRING);
    // $ip = $_SERVER['REMOTE_ADDR'];
    // echo $ip;die;
    // $ip = $_SERVER['REMOTE_ADDR'];
    // $response = file_get_contents('https://ipapi.co/'.$ip.'/json/?key=wAqgvqDplgWoJSa4wT79inBdLMFI248YX5wC26HBz55HR3cQAC');
    // $response = json_decode($response);
    $role = "adv";
    // $role = $role.$ip;


    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select_user->execute([$email]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);
 
    // if($select_user->rowCount() > 0){
    //    $message[] = 'email already exists!';
    // }else{
      
          $insert_user = $conn->prepare("INSERT INTO `publishers_advertiser`(name, email,password, number, what_monetize, business_name,business_address,city,state,zip_code, role) VALUES(?,?,?,?,?,?, ?,?,?,?,?)");
          $insert_user->execute([$name, $email,$pass, $number, $what_monetize, $business_name, $business_address, $city, $state, $zip_code,$role]);
          $_SESSION['successAdv'] = 'Thanks for contacting us, We will contact you soon';
             $toEmail = $email;
             $emailSubject = 'New email from your contaсt form';
         
               // Create a new PHPMailer instance
                 $mail = new PHPMailer(true);
                 try {
                     // Configure the PHPMailer instance
                     $mail->isSMTP();
                     $mail->Host = 'smtp.googlemail.com';
                     $mail->SMTPAuth = true;
                     $mail->Username = 'activarmor.test@gmail.com';
                     $mail->Password = 'ynwqbrlxsvwumfqf';
                     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                     $mail->Port = 587;
         
                     // Set the sender, recipient, subject, and body of the message
                     $mail->setFrom($email);
                     $mail->addAddress($toEmail);
                     $mail->Subject = $emailSubject;
                     $mail->isHTML(true);
                     $mail->Body = "<p>Name: {$name}</p><p>Email: {$email}</p><p>Message: {$what_monetize}</p>";
         
                     // Send the message
                     $mail->send();
         
                     $successMessage = "<p style='color: green;'>Thank you for contacting us :)</p>";
                 } catch (Exception $e) {
               $errorMessage = "<p style='color: red;'>Oops, something went wrong. Please try again later</p>";
             }
          
         
             header('location:advertisers.php');
          
       
    // }
 
 }
 
 
 ?>