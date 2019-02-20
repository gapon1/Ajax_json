$(document).ready (function () {
    jQuery(".button").bind("click", function() {
    var name = jQuery('.nameField').val();
    var surname = jQuery('.surnameField').val();
    var age = jQuery('.ageField').val();

    jQuery('.nameField').val('');
    jQuery('.surnameField').val('');
    jQuery('.ageField').val('');



        $.ajax({
            url: "db_send.php",
            type: "POST",
            data: ({name:name, surname:surname, age:age}),
            dataType: "json",
            success: function(result) {
                if (result){
                    //$('.rows tr').remove();
                    $('.rows').append(function(){
                        var res = '';
                        for(var i = 0; i < result.users.name.length; i++){
                            res += '<tr><td>' + result.users.id[i] + '</td><td>' + result.users.name[i] + '</td><td>' + result.users.surname[i] + '</td><td>' + result.users.age[i] + '</td></tr>';
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