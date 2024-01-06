function validateSendMessageForm() {
    var message = document.forms["sendMessageForm"]["message"].value;

    if (message == "") {
        alert("Please enter a message.");
        return false;
    }

    return true;
}
