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


        $(document).ready (function () {
            $('#done').bind('click', function () {
                $.ajax({
                    url: "check.php",
                    type: "POST",
                    data: ({name: $('#name').val()}),
                    dataType: "html",
                    beforeSend: function () {
                        $("#infortation").text("Wait for DATA");
                    },
                    success: function (data) {
                         if (data == 'Used')
                             alert("Name Used");
                         else
                             $("#infortation").text(data);

                    }

                });

            });
        });

    </script>

</head>
<body>
<p>Ajax lessons</p>

<p id="load" style="cursor: pointer">Load data</p>

<div id="infortation"></div>


<label>Enter your bane
    <input type="text" id="name" name="name" placeholder="name">
</label>
<button type="submit" id="done" value="send">Ready</button>


</body>
</html>