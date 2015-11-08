$( document ).ready(function() {
    $("#signupForm").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            username: {
                required: true,
                minlength: 2
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            },
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            username: {
                required: "Please enter your username",
                minlength: "Your username must consist of at least 2 characters"
            },
            password: {
                required: "Please enter a password",
                minlength: "Your password must consist of at least 5 characters"
            },
            confirm_password: {
                required: "Please confirm your password",
                minlength: "Your password must consist of at least 5 characters",
                equalTo: "Please enter the same password as above"
            },

            
        }
    });
    
});