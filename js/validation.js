$(document).ready(function () {
    $('#registration-form').submit(function (e) {
        e.preventDefault();
        // Reset validation messages
        $('#validation-messages').html("");

        // Array to store error messages
        var errorMessages = [];

        // Validate username
        var username = $('input[name="username"]').val();
        if (username === "") {
            errorMessages.push("Username is required.");
        }

        // Validate password
        var password = $('input[name="password"]').val();
        if (password === "") {
            errorMessages.push("Password is required.");
        }

        // Validate name
        var name = $('input[name="name"]').val();
        if (name === "") {
            errorMessages.push("Full Name is required.");
        }

        // Validate email
        var email = $('input[name="email"]').val();
        if (email === "") {
            errorMessages.push("Email is required.");
        }

        // Validate phone
        var phone = $('input[name="phone"]').val();
        if (phone === "") {
            errorMessages.push("Phone is required.");
        }

        // If there are validation errors, display them in a single alert
        if (errorMessages.length > 0) {
            displayErrorMessage("Registration failed. Please fix the following:\n" + errorMessages.join("\n"));
        } /*else {
            submitForm();
        }*/
    });

    function displayErrorMessage(message) {
        $('#validation-messages').html(message);
        // Show an alert with the accumulated error messages
        alert(message);
    }

    function submitForm() {
        // Your existing AJAX submission logic
        $.ajax({
            type: 'POST',
            url: 'register.php',
            data: $('#registration-form').serialize(),
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success') {
                    window.location.href = 'login.php';
                } else {
                    // Display validation messages
                    displayErrorMessage(response.message);
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
