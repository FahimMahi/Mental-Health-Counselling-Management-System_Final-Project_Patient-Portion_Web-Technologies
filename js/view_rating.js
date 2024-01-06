// jQuery script for handling Ajax requests
$(document).ready(function () {
    // Handle search for counselors
    $("#searchCounselorForm").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (data) {
                $("#counselorRatingsTable").empty().html(data);
            }
        });
    });

    // Handle search for all feedback
    $("#searchAllFeedbackForm").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (data) {
                $("#allFeedbackTable").empty().html(data);
            }
        });
    });
});
