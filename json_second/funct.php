<?php


if ($_POST['first'] && $_POST['second']) {
    $first = (int)$_POST['first'];
    $second = (int)$_POST['second'];

    $json = [
        "success" => "ok",
        "result" => $first + $second
    ];

} else {
    echo "error";
}


echo json_encode($json);