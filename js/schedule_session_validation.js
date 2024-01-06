function validateForm() {
    var counselor = document.forms["sessionForm"]["counselor"].value;
    var sessionDate = document.forms["sessionForm"]["session_date"].value;
    var sessionNotes = document.forms["sessionForm"]["session_notes"].value;

    if (sessionDate === "") {
        alert("Please select a session date");
        return false;
    }

    if (sessionNotes === "") {
        alert("Please enter session notes");
        return false;
    }

    return true;
}
