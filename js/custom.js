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
                        txtemail:
                        {
                            required:true,
                            email:true
                        },
                        txtpass:
                        {
                            required:true,
                            minlength:8
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
                        txtemail:
                        {
                            required:"Please enter your E-mail Address",
                            email:"Please enter a valid E-mail Address"
                        },
                        txtpass:
                        {
                            required:"Please enter a password",
                            minlength:"Enter atleast least 5 characters"
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
        });