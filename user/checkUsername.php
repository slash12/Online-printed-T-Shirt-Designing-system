<?php 
    require("../includes/connect.php");

    $username = mysqli_real_escape_string($dbc ,trim($_POST['txtusername']));

    $qry_chckUsername = "SELECT * FROM tbl_user WHERE username='$username';";

    $qry_run = mysqli_query($dbc, $qry_chckUsername);
    
    if($qry_run)
    {
        $rowCount = mysqli_num_rows($qry_run);
        if($rowCount > 0)
        {
           //echo "<span style='color:red;'>Username already existed</span>";         
           echo "false";
        }
        else
        {
            //echo "<span style='color:green;'>Username is available</span>";
            echo "true";
        }
    }
    else
    {
        echo "Query did not run";
    }
?>