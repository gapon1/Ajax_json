<?php
sleep(2);
if ($_POST['name'] == 'admin'){
    echo "Used";
}else{
    echo "Success\n";
    echo $_POST['name'];
}