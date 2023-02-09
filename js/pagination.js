$(document).ready(function() {
    // PAGINATION DATA
    function load_pages(page) {
        $.ajax({
            url: "./includes/pagination.php",
            type: "POST",
            data: {
                page_no: page
            },
            success: function(data) {
                $('#pagination-data').html(data);
            }
        });
    }

    load_pages();

    // PAGINATION WORK
    $(document).on("click", "#pagination li a", function(e) {
        e.preventDefault();
        var page_id = $(this).attr("id");
        load_pages(page_id);
    });
});