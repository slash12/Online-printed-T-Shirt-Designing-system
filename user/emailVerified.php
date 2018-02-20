<?php 
    if(!isset($_GET['email']) && (!isset($_GET['token'])))
    {
        header('Location: register.php');
    }
    else
    {
        require('../includes/connect.php');
        $email = mysqli_real_escape_string($dbc ,trim($_GET['email']));
        $token = mysqli_real_escape_string($dbc ,trim($_GET['token']));

        $sql_search = "SELECT user_id FROM tbl_user WHERE email = '$email' AND token='$token' AND isEmailConfirmed = 0;";
        $search_qry = mysqli_query($dbc, $sql_search);

    }
?>