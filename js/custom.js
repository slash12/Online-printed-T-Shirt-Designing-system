$(document).ready(function()
        {
         //Registration Form Validation
         $('#frmregister').validate({
                    rules:
                    {
                        txtlname:
                        {
                            required:true,
                            minlength:5
                        },
                        txtfname:
                        {
                            required:true,
                            minlength:5
                        },
                        txtaddress:
                        {
                            required:true
                        },
                        txtpostalcode:
                        {
                            required:true,
                            maxlength:5,
                            minlength:5
                        },
                        txtemail:
                        {
                            required:true,
                            email:true
                        },
                        txtusername:
                        {
                            required:true,
                            minlength:5
                        },
                        txtpass:
                        {
                            required:true,
                            minlength:8,
                            pwchdigit:true,
                            pwchcon:true,
                            pwchlletter:true,
                            pwchuletter:true
                        },
                        txtcpass:
                        {
                            required:true,
                            minlength:8,
                            equalTo:"#txtpass"
                        }
                    }, 
                    messages:
                    {
                        txtlname:
                        {
                            required: "Enter your Last Name",
                            minlength: "Enter atleast least 5 characters"
                        },
                        txtfname:
                        {
                            required: "Enter your First Name",
                            minlength: "Enter atleast least 5 characters"
                        },
                        txtaddress:
                        {
                            required:"Please Enter your Full Address"
                        },
                        txtpostalcode:
                        {
                            required:"Please Enter Your Postal Code",
                            maxlength:"Please Enter an appropriate Value (max-character: 5)",
                            minlength:"Please Enter atleast 5 Characters (min-character: 5)"
                        },
                        txtemail:
                        {
                            required:"Please enter your E-mail Address",
                            email:"Please enter a valid E-mail Address"
                        },
                        txtusername:
                        {
                            required:"Please Enter your username",
                            minlength:"Please Enter atleast 5 Characters"
                        },
                        txtpass:
                        {
                            required:"Please enter a password",
                            minlength:"Enter atleast least 8 characters",
                            pwchdigit:"Please enter atleast one digit",
                            pwchcon:"Please enter atleast one symbol (e.g =!\-@._*) ",
                            pwchlletter:"Please enter atleast one Lowercase letter",
                            pwchuletter:"Please enter atleast one Uppercase letter"

                        }
                        
                    },
                    errorElement : 'div',
                    errorPlacement: function(error, element) 
                    {
                        var placement = $(element).data('error');
                        if (placement) 
                        {
                            $(placement).append(error);
                        } 
                        else 
                        {
                            error.insertAfter(element);
                        }
                    }
                    
                });

                //Password check contant special value
                $.validator.addMethod("pwchcon", function(value) {
                    return /[=!\-@._*]/.test(value) 
                 });

                //Password check lowercase letter
                $.validator.addMethod("pwchlletter", function(value) {
                    return /[a-z]/.test(value);
                 });

                //Password check for digit 
                $.validator.addMethod("pwchdigit", function(value) {
                    return /\d/.test(value) 
                 });

                //Password check for uppercase letter
                $.validator.addMethod("pwchuletter", function(value) {
                    return /[A-Z]/.test(value) 
                 });
        });

        