<!DOCTYPE html>
<html lang="rus">
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta charset="UTF-8"/>
    <title>ajax</title>
</head>
<body>
<h1>Авторизация </h1>
<p id="contenr_p"></p>
        <form id="my_form">

            <hr/>

            <input type="text" placeholder="Your name" name="name">
            <input type="password" placeholder="password" name="password">
            <button type="submit">Send</button>

            <hr/>
        </form>

        <script type="text/javascript">

                $('#my_form').submit(function () {

                    var str = $(this).serialize();
                    $.ajax({

                        type: "POST",
                        url: "php/hello.php",
                        data: str,
                        success: function (html) {
                            $('#contenr_p').html(html);
                        }

                    });

                    return false;

                });

               setInterval('show()', 1000);

        </script>


</body>
</html>