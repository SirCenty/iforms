<?php
include_once ('php/config.php');
//notify requester
    $notify_reqsql = mysqli_query($conn, "SELECT users.names as uname, network.id as nid, network.emails as nemails, initials FROM users, network WHERE network.id = '" . $id . "' ");
    $notify_reqvalues = mysqli_fetch_assoc($notify_reqsql);

    //body 1
    $message = 'Hi,<br />
    <br />
    A request is pending your implementation. Click <a href="http://localhost/iforms/index.php">HERE</a> to view.';

    require "phpmailer/class.phpmailer.php"; //include phpmailer class
    // Instantiate Class  
    $mail = new PHPMailer();

    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = false;         // Connection with the SMTP does require authorization    
    //$mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "172.16.10.223";  //Gmail SMTP server address
    $mail->Port = 25;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    // Authentication  
    $mail->Username   = "donotreply.ke@interswitchgroup.com"; // Your full Gmail address
    $mail->Password   = "Password123"; 
    // Compose
    $mail->SetFrom('donotreply.ke@interswitchgroup.com', 'IForms');
    $subject1 = $mail->Subject = "IMPLEMENT THIS AUTH. FORM REQUEST";      // Subject (which isn't required)  
    $mail->MsgHTML($message);


    // Send To  
    $mail->AddAddress('vincent.omondi@interswitchgroup.com', "Implementer"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
    //$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
    unset($mail);
//notify requester

    //page redirect after posting
    echo '<script>window.location.href = "authrequests.php";</script>';
?>