function validateForm() {
    var rating = document.forms["ratingForm"]["rating"].value;
    var feedback = document.forms["ratingForm"]["feedback"].value;

    if ((isNaN(rating) || rating < 1 || rating > 5) && feedback === "") {
        alert("Invalid rating. Please provide a rating between 1 and 5. Also, please provide feedback.");
        return false;
    }

    else if (isNaN(rating) || rating < 1 || rating > 5) {
        alert("Invalid rating. Please provide a rating between 1 and 5.");
        return false;
    }
    else if (feedback === "") {
        alert("Please provide feedback.");
        return false;
    }

    return true;
}
