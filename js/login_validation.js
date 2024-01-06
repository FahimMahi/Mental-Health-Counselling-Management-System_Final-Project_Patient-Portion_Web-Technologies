function validateForm() {
    var username = document.forms["login-form"]["username"].value.trim();
    var password = document.forms["login-form"]["password"].value.trim();

    if (username === "" && password === "") {
        alert("Username and password must be filled out");
        return false;
    }
    else if(username === "") {
        alert("Username must be filled out");
        return false;
    }
    else if(password === "") {
        alert("Password must be filled out");
        return false;
    }

    return true;
}

$(document).ready(function () {
    $('#login-form').submit(function (e) {
        e.preventDefault();

        if (validateForm()) {
            $.ajax({
                type: 'POST',
                url: 'login.php',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        window.location.href = 'dashboard.php';
                    } else {
                        alert("Invalid username and password");
                    }
                },
                error: function (xhr, status, error) {
                    console.log('Ajax error:', xhr.responseText); // Log the full response
                    console.log('Status:', status);
                    console.log('Error:', error);
                }
            });
        }
    });
});
