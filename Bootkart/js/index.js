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
                window.location = "login.php";
            } else {
                alert("There was some problem, please try later");
            }
        }
    });
}

function login() {
    username = $('#username').val();
    password = $('#password').val();

    $.ajax({
        type: "POST",
        url: "Backend/login_ajax.php",
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
                window.location = "index.php";
            } else {
                alert("There was some problem, please try later");
                window.location = "";
            }
        }
    });
}


function addtocart(userid, productid) {
    username = $('#username').val();
    password = $('#password').val();

    $.ajax({
        type: "POST",
        url: "Backend/addtocart_ajax.php",
        data: {
            //data goes here
            userid,
            productid
        },
        success: function (data) {
            //data is returned here
            //console.log(data);
            //$('#answer').val(data);
            if (data == 'success') {
                alert("Successfully added to art");
                window.location = "cart.php";
            } else {
                alert("There was some problem, please try later");
            }
        }
    });
}