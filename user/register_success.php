<?php 
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

        $register_query = "INSERT INTO tbl_user(l_name, f_name, country, address, postal_code, email, password) VALUES('$lname', '$fname', '$country', '$address', '$postal_code', '$email', '$password');";

        $register_query_run = mysqli_query($dbc, $register_query);

        if($register_query_run)
        {
            echo "Store in the db";
        }
        else
        {
            echo "zafr la pan run pff";
        }


        echo $password;
    }
    else
    {
        echo "wrong";
    } 
?>

<<!DOCTYPE html>
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