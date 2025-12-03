///FOR AM/PM
// $(function() {
//     $("#reservation").daterangepicker(), $("#tpBasic").timepicker(), $("#tp2").timepicker({
//         scrollDefault: "now"
//     }), $(".tp2").timepicker({
//         scrollDefault: "now"
//     }), $("#tp3").timepicker(), $(document).on("click", "#setTimeButton", function() {
//         $("#tp3").timepicker("setTime", new Date)
//     })
// });

$(function() {
    $("#reservation").daterangepicker();

    $("#tpBasic").timepicker({
        timeFormat: 'H:i'
    });

    $("#tp2").timepicker({
        scrollDefault: "now",
        timeFormat: 'H:i'
    });

    $(".tp2").timepicker({
        scrollDefault: "now",
        timeFormat: 'H:i'
    });

    $("#tp3").timepicker({
        timeFormat: 'H:i'
    });

    $(document).on("click", "#setTimeButton", function() {
        $("#tp3").timepicker("setTime", new Date());
    });
});
