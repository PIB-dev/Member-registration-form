$(document).ready(function () {
    $("#member-form").submit(function (e) {
        e.preventDefault();

        $("#load-form").removeClass("hidden");
        $("#load-form").addClass("flex");
        var formData = new FormData(this);

        postDataForm(formData);
    });

    function postDataForm(formData) {
        $.ajax({
            url: "/members",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data) {
                    window.location.href = "/successful";
                } else {
                    window.location.href = "/errorform";
                }
            },
            error: function (error) {
                window.location.href = "/errorform";
            },
        });
    }
});
