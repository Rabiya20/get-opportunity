$(document).ready(function() {
    // SEARCHING FILTER
    $('#keyword').on("keyup", function() {
        var action = 'fetch_data';
        var search_term = $(this).val();
        $.ajax({
            url: "./includes/search.php",
            method: "POST",
            data: {
                action: action,
                search: search_term
            },
            beforeSend: function() {
                $(".form-show1").html("<span>working...</span>");
            },
            success: function(data) {
                $('.form-show1').html(data);
            }
        });
    });
});