<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
</head>
<body>
<form method="post" >
<input type="text" name="name" class="nameField" placeholder="Введите имя">
<input type="text" name="surname" class="surnameField" placeholder="Введите фамилию">
<input type="text" name="age" class="ageField" placeholder="Введите возраст">
<input type="submit" value="enter" class="button">
</form>

<table class="rows">

</table>


<script>
jQuery(document).ready(function() {
    jQuery(".button").bind("click", function() {

        var name = jQuery('.nameField').val();
		var surname = jQuery('.surnameField').val();
		var age = jQuery('.ageField').val();

		jQuery('.nameField').val('');
		jQuery('.surnameField').val('');
		jQuery('.ageField').val('');

        jQuery.ajax({
            url: "for_db.php",
            type: "POST",
            data: {name:name, surname:surname, age: age}, // Передаем данные для записи
            dataType: "json",
            success: function(result) {
                if (result){
					jQuery('.rows tr').remove();
                    jQuery('.rows').append(function(){
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
</script>
</body>
</html>