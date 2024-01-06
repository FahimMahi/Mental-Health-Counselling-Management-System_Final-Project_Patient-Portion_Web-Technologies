function validateForm() {
    var name = document.forms["updateForm"]["name"].value;
    var email = document.forms["updateForm"]["email"].value;
    var phone = document.forms["updateForm"]["phone"].value;


    if (name == "" && email == "" && phone == "" ) {
        alert("Please enter your full name, email and phone number.");
        return false;
    }

    else if (name == "" && phone == "" ) {
        alert("Please enter your full name and phone number.");
        return false;
    }

    else if (name == "" && email == "") {
        alert("Please enter your full name and email.");
        return false;
    }

    else if (email == "" && phone == "" ) {
        alert("Please enter your email and phone number.");
        return false;
    }

    else if (name == "") {
        alert("Please enter your full name.");
        return false;
    }

    else if (email == "") {
        alert("Please enter your email address.");
        return false;
    }

    else if (phone == "") {
        alert("Please enter your phone number.");
        return false;
    }

    return true;
}
