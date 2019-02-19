<!DOCTYPE html>
<html lang="rus">
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta charset="UTF-8"/>
    <title>ajax</title>


    <script type="text/javascript">


        $(document).ready(function () {

            $("select[name='country']").bind('change', function () {
                $("select[name='city']").empty();

                $.get("countryCheck.php", {country: $("select[name='country']").val()}, function (data) {

                    data = JSON.parse(data);

                    for (var id in data) {
                        $("select[name='city']").append($("<option value='" + id + "'>" + data[id] + "</option>"));
                    }

                });
            });
        });

    </script>


</head>
<body>
<h1>Авторизация </h1>
<p id="contenr_p"></p>
<form id="my_form">

    <hr/>

    <label>
        Insert country
    </label>
    <select name="country">
        <option value="0"></option>
        <option value="1">USA</option>
        <option value="2">UKraine</option>
    </select>


    <label>
        Cities
    </label>
    <select name="city">
        <option value="0"></option>

    </select>


    <hr/>
</form>


</body>
</html>