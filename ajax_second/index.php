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

    <script src="script.js"></script>
</head>
<body>

<hr>
<h1 style="text-align: center">AJAX</h1>
<hr>



<form  method="post">
    <input type="text" class="name_aj" name="name" placeholder="name">
    <input type="text" class="last_aj" name="lastname" placeholder="lastname">
    <input type="number" class="age_aj"  name="age" placeholder="age">

    <button id="Myform" type="submit">Send</button>

</form>

<div id="infortation"></div>

<div class="rows">
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

</div>


</body>
</html>