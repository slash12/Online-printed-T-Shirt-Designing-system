<?php 
    require("../includes/connect.php");

    $email = mysqli_real_escape_string($dbc ,trim($_POST['txtemail']));

    $qry_chckEmail = "SELECT * FROM tbl_user WHERE e_mail='$email';";

    $qry_run = mysqli_query($dbc, $qry_chckEmail);
    
    if($qry_run)
    {
        $rowCount = mysqli_num_rows($qry_run);
        if($rowCount > 0)
        {
           echo "false";
        }
        else
        {
            echo "true";
        }
    }
    else
    {
        echo "Query did not run";
    }
?>