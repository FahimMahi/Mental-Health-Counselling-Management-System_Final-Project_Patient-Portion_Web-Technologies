function validateForm() {
    var currentPassword = document.forms["passwordForm"]["current_password"].value;
    var newPassword = document.forms["passwordForm"]["new_password"].value;

    if (currentPassword === "" && newPassword === "") {
        alert("Please enter your current and new password.");
        return false;
    }

    if (currentPassword === "") {
        alert("Please enter your current password.");
        return false;
    }

    if (newPassword === "") {
        alert("Please enter a new password.");
        return false;
    }

    return true;
}
