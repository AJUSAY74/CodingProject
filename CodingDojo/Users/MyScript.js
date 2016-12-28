$(document).ready(function() {
    // var formData= $("form");
    $("button").click(function() {
        var fname= $("input[name=fname]").val();
        var lsname = $("input[name=lsname]").val();
        var mail = $("input[name=mail]").val();
        var phone = $("input[name=phone]").val();
        var html = "<tr><td>" + fname + "</td><td>" + lsname + "</td><td>" + mail + "</td><td>" + phone + "</td></tr>";

        $("tbody").append(html);
        return false;
    });
});