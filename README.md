# phpmailer-example-using-oops
PHPMailer is a class library for PHP that provides a collection of functions to build and send email messages. PHPMailer supports several ways of sending email: mail() , Sendmail, qmail &amp; direct to SMTP servers. You can use any feature of SMTP-based e-mail, multiple recepients via to, CC, BCC, etc.

## Step 1: Add three files 

### 1. class.phpmailer.php 
### 2. class.smtp.php
### 3. PHPMailerAutoload.php

## Step 2: Add this Code


require 'PHPMailerAutoload.php';
            
            $mail = new PHPMailer;
            
            //$mail->SMTPDebug = 3;                               // Enable verbose debug output
            
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'exmple@gmail.com';                 // SMTP username
            $mail->Password = 'email password';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to      
            $mail->setFrom('exmple@gmail.com', 'Hardik Prajapati');
            $mail->addAddress($email);     // Add a recipient
                          // Name is optional
            $mail->addReplyTo('exmple@gmail.com');
           
            
           // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
           // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML
            
            $mail->Subject = 'your Password';
            $mail->Body    = '<h1 style="color:green;">Forgot Password successful</h1>"';
           $mail->AltBody = $password ;
            
            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }

# start project

### opne index.html

### Registration
![Alt text](./index.PNG "Optional Title")

### Login

![Alt text](./login.PNG "Optional Title")

### Forgot Password

![Alt text](./forgot.PNG "Optional Title")
