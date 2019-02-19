<?php


if ($_GET['country'] == 1){
    echo json_encode(array("1" => "NY", "2" => "Los angeles"));
}elseif ($_GET['country'] == 2){
    echo json_encode(array("1" => "Paris", "2" => "Marsel"));

}