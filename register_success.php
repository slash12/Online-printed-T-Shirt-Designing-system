<?php 
    require('includes/connect.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $lname = trim($_POST['txtlname']);
        $fname = trim($_POST['txtfname']);
        $country = trim($_POST['sltcountry']);
        $address = trim($_POST['txtaddress']);
        $postal_code = trim($_POST['txtpostalcode']);
        $email = trim($_POST['txtemail']);
        $password = md5(trim($_POST['txtpass']));

        echo $password;
    }
    else
    {
        echo "wrong";
    }

   
?>