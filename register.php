<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <title>Register</title>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootsnipp.min.css">
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!--Custom Stylesheets -->
        <link rel="stylesheet" href="css/custom.css">
        
          <script type="text/javascript" src="js/jquery.min.js"></script>
          <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script>
        //To open up the modal
            $(document).ready(function()
            {
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
                $('.modal').modal();
            });
            
        </script>

    </head>
    <body>
    <!-- Registration Form Trigger -->
        <a class="waves-effect waves-light btn modal-trigger" href="#mdfrmregister">Register</a>
            <div class="modal modal-fixed-footer" id="mdfrmregister">
                <div class="modal-content">
                    <h3 class="head">Registration Form</h3>
                    <form class="col s12" id="frmregister">

                    <!-- Last Name -->
                        <div class="row">
                            <div class="input-field inline">
                                <input id="txtlname" name="txtlname" type="text">
                                <label for="last_name">Last Name</label>
                            </div>

                    <!-- First Name -->
                            <div class="input-field inline">
                                <input id="txtfname" name="txtfname" type="text">
                                <label for="first_name">First Name</label>
                            </div>
                        </div>
                        
                    <!-- E-mail -->
                        <div class="row">
                            <div class="input-field col s12">
                            <input id="txtemail" name="txtemail" type="email">
                            <label for="email">E-mail</label>
                            </div>
                        </div>

                    <!-- Password -->
                    <div class="row">
                            <div class="input-field col s12">
                            <input id="txtpass" name="txtpass" type="password" class="validate">
                            <label for="password">Password</label>
                            </div>
                    </div>
                    
                    <!-- Confirm Password -->
                    <div class="row">
                            <div class="input-field col s12">
                            <input id="txtcpass" name="txtcpass" type="password" class="validate">
                            <label for="confirm password">Confirm Password</label>
                            </div>
                    </div>
                </div>
                    <div class="modal-footer">
                    <!-- Submit button -->
                        <button class="btn waves-effect waves-light" id="btnregissub" type="submit" name="btnregissub">
                            Submit
                        </button>
                    </div>
                </form>
            </div>    
    <script type="text/javascript" src="js/custom.js"></script>

      
        <script type="text/javascript" src="js/materialize.min.js"></script>
        
    </body>
</html>