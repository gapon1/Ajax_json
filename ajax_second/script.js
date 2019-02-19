$(document).ready (function () {
    $('#Myform').bind('click', function () {
    var name = $('.name_aj').val();
    var lastname = $('.last_aj').val();
    var age  = $('.age_aj').val();

    $('.name_aj').val('');
    $('.last_aj').val('');
    $('.age_aj').val('');



        $.ajax({
            url: "db_send.php",
            type: "POST",
            data: ({name: name, lastname: lastname, age: age}),
            dataType: "json",
            beforeSend: function () {
                $("#infortation").text("Wait for DATA");
            },
            success: function(result) {
                if (result){
                    $('.rows tr').remove();
                    $('.rows').append(function(){
                        var res = '';
                        for(var i = 0; i < result.users.name.length; i++){
                            res += '<tr><td>' + result.users.id[i] + '</td><td>' + result.users.name[i] + '</td><td>' + result.users.lastname[i] + '</td><td>' + result.users.age[i] + '</td></tr>';
                        }
                        return res;
                    });
                    console.log(result);
                }else{
                    alert(result.message);
                }
                return false;
            }

        });
        return false;
    });
});