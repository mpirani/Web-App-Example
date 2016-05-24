$(document).ready(function() {
    $("#ssubmit").click(function() {
        var msg = $("#sinput").val();
        $("#slist").append("<li>" + msg + "</li>");
        $("#sinput").val('');
    });

    $("#fsubmit").click(function() {
        var msg = $("#finput").val();
        $("#flist").append("<li>" + msg + "</li>");
        $("#finput").val('');
    });
});
