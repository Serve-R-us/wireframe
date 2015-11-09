$( document ).ready(function() {
    $("#teamForm").validate({
        rules: {
            teamname: {
                required: true,
                minlength: 4
            },
            email1: {
                required: true,
                email: true
            },
            email2: {
                required: true,
                email: true
            },
            email3: {
                required: false,
                email: true
            }
        },
        messages: {
            teamname: {
                required: "Please enter a team name",
                minlength: "Your team name must be at least 4 characters long"
            },
            email1: {
                required: "Please enter at least two emails",
            },
            email2: {
                required: "Please enter at least two emails",
            },


            
        }
    });
    
});