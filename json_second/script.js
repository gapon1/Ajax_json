$(document).ready(function () {
    $('form').bind("submit", function () {

        var that = $(this),
            contents = that.serialize();

        $.ajax({
            method: "POST",
            dataType: "json",
            url: "funct.php",
            data: contents,
            success: function (data) {
               $('.show').text(data.result);
               console.log(data);
            }

        });
        return false;
    });


});