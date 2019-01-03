function signup() {
    username = $('#username').val();
    password = $('#password').val();

    $.ajax({
        type: "POST",
        url: "Backend/signup_ajax.php",
        data: {
            //data goes here
            username,
            password
        },
        success: function (data) {
            //data is returned here
            //console.log(data);
            //$('#answer').val(data);
            if (data == 'success') {
                alert("Successfully registered");
                window.location = "";
            } else {
                alert("There was some problem, please try later");
            }
        }
    });
}