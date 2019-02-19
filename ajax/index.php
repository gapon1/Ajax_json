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



    <script type="text/javascript">

        function funcBefore(){
            $("#infortation").text("Wait for DATA");
        }

        function functSuccess(data){
            $("#infortation").text(data);
        }

        $(document).ready (function () {
            $('#load').bind('click', function () {
                var admin = "Admin";
                $.ajax({
                    url: "contebn.php",
                    type: "POST",
                    data: ({name: admin, pass: 123}),
                    dataType: "html",
                    beforeSend: funcBefore,
                    success: functSuccess

                });

            });
        });

    </script>

</head>
<body>
<p>Ajax lessons</p>

<p id="load" style="cursor: pointer">Load data</p>

<div id="infortation"></div>





</body>
</html>