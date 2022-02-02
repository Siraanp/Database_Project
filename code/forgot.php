<?php
    include("connection.php");
    require("PHPMailer-master/src/PHPMailer.php");
    require("PHPMailer-master/src/SMTP.php");
    require("PHPMailer-master/src/Exception.php");
    $email = $_POST['forgot'];
    $sql="SELECT * FROM customer Where email='".$email."'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $token = $row["token"];
        $link = "<h1 style='color:red'>Your Password is : <br> " .$row['password']."</h1>";
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->IsSMTP(); 
        $mail->CharSet="UTF-8";
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPDebug = 1; 
        $mail->Port = 465 ; //465 or 587
        $mail->SMTPSecure = 'ssl';  
        $mail->SMTPAuth = true; 
        $mail->IsHTML(true);

        //Authentication
        $mail->Username = "preutha.title@g.swu.ac.th";
        $mail->Password = "62102010162";

        //Set Params
        $mail->SetFrom("foo@gmail.com");
        $mail->AddAddress($email);
        $mail->Subject = "Your password in Web Hotel Management";
        $mail->Body = $link;


        if(!$mail->Send()) {
            header("location: Login.php");
        } else {
            header("location: Login.php");
        }
        
    }
        
?>