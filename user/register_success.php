<?php 
    use PHPMailer\PHPMailer\PHPMailer; 
    use PHPMailer\PHPMailer\Exception;
    require('../includes/connect.php');
    
    

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $lname = mysqli_real_escape_string($dbc ,trim($_POST['txtlname']));
        $fname = mysqli_real_escape_string($dbc ,trim($_POST['txtfname']));
        $country = mysqli_real_escape_string($dbc ,trim($_POST['sltcountry']));
        $address = mysqli_real_escape_string($dbc ,trim($_POST['txtaddress']));
        $postal_code = mysqli_real_escape_string($dbc ,trim($_POST['txtpostalcode']));
        $email = mysqli_real_escape_string($dbc ,trim($_POST['txtemail']));
        $username = mysqli_real_escape_string($dbc ,trim($_POST['txtusername']));
        $password = mysqli_real_escape_string($dbc, md5(trim($_POST['txtpass'])));

        $token = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM123456789!$/()*";
        $token = str_shuffle($token);
        $token = substr($token, 0, 10);
       

        $register_query = "INSERT INTO tbl_user(l_name, f_name, country, address, postal_code, e_mail, username,password, isEmailConfirmed, token) VALUES('$lname', '$fname', '$country', '$address', '$postal_code', '$email', '$username','$password', '0', '$token');";

        $register_query_run = mysqli_query($dbc, $register_query);

        if($register_query_run)
        {

            include_once("phpMailer/PHPMailer.php");
            include_once("phpMailer/Exception.php");
            include_once("phpMailer/SMTP.php");
            $mail = new PHPMailer();
            //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com;';                    // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->SMTPSecure = false;
            $mail->Username = 'testappui357@gmail.com';                 // SMTP username
            $mail->Password = 'qwert1234';                           // SMTP password
            //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 25;                       
            $mail->setFrom('testappui357@gmail.com', 'Nadda');
            $mail->addAddress('nadeemshb_12@hotmail.com', 'Nad User');
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = "
                Please Click on the link below: <br><br>
                <a href=\"http://localhost:8001/dissertation/Online-printed-T-Shirt-Designing-system/user/emailVerified.php?email=$email&token=$token\">Click Here</a>    
            ";
            

            if($mail->send())
            {
                echo "You have been registered. Please check your E-mail to activate your account.";
            }
            else
            {
                echo $mail->ErrorInfo;
            }
            //header('Location: register.php');
        }
        else
        {
            echo "qry not run";
        }

    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Success</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>