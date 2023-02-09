$(document).ready(function() {
    // FILTER WORK
    $('#filterUni').change(function() {
        filter_data();
    })
    $('#filterDegree').change(function() {
        filter_data();
    })
    $('#filterFields').change(function() {
        filter_data();
    })
    $('#filterLanguage').change(function() {
        filter_data();
    })
    $('#filterIelts').change(function() {
        filter_data();
    })
    $('#filterIIELTS').change(function() {
        filter_data();
    })
    $('#filterTOEFL').change(function() {
        filter_data();
    })
    $('#filterGerman').change(function() {
        filter_data();
    })
    $('#filterApplication').change(function() {
        filter_data();
    })
    $('#filterCity').change(function() {
        filter_data();
    })
    $('#filterFees').change(function() {
        filter_data();
    })
    $('#filterBeginning').change(function() {
        filter_data();
    })
    filter_data();

    // COMMON CLASS FOR  FILTERS
    function get_filter2_0(class_name) {
        var filter = [];
        $('.' + class_name + ':selected').each(function() {
            filter.push($(this).val());
        });
        console.log("data " + filter);
        return filter;
    }

    function filter_data() {
        var action = 'fetch_data';
        var university = get_filter2_0('option-university');
        var degree = get_filter2_0('option-degree');
        var field = get_filter2_0('option-field');
        var language = get_filter2_0('option-language');
        var langreq = get_filter2_0('option-lang-req');
        var ielts = get_filter2_0('option-ielts');
        var toefl = get_filter2_0('option-toefl');
        var level = get_filter2_0('option-level');
        var method = get_filter2_0('option-method');
        var city = get_filter2_0('option-city');
        var fee = get_filter2_0('option-fee');
        var semester = get_filter2_0('option-semester');

        $.ajax({
            url: "./includes/fetch.php",
            method: "POST",
            data: {
                action: action,
                degree: degree,
                field: field,
                language: language,
                langreq: langreq,
                ielts: ielts,
                toefl: toefl,
                level: level,
                method: method,
                city: city,
                university: university,
                fee: fee,
                semester: semester
            },
            beforeSend: function() {
                $(".form-show1").html("<span>working...</span>");
            },
            success: function(data) {
                $('.form-show1').html(data);
            }
        });
    }
});