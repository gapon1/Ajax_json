<?php

$driver = "mysql";
$host = "localhost";
$db_name = "test";
$db_user = "root";
$db_pass = "test02156";
$charset = "utf8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];


try {

    $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options);

    // insert a row
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = intval($_POST['age']);
//    $stmt = $pdo->prepare("DELETE FROM test.ajaxData WHERE id BETWEEN 53 AND 77");
//    $stmt->execute();
//    exit();
    if($name && $surname && $age){
    //======= insert data to DB  =========
    $stmt = $pdo->prepare("INSERT INTO ajaxData (name, surname, age) VALUES (:name, :surname, :age)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':age', $age);
    $stmt->execute();


    //======= Select data from DB ========



    $sql = 'SELECT * FROM ajaxData ORDER BY id DESC';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $users['id'][] = $row['id'];
            $users['name'][] = $row['name'];
            $users['surname'][] = $row['surname'];
            $users['age'][] = $row['age'];
        }
        $message = 'Все хорошо';



    }else{
        $message = 'Не удалось записать и извлечь данные';
    }


    /** Возвращаем ответ скрипту */

// Формируем масив данных для отправки
    $out = array(
        'message' => $message,
        'users' => $users
    );

// Устанавливаем заголовот ответа в формате json
    header('Content-Type: text/json; charset=utf-8');

// Кодируем данные в формат json и отправляем
    echo json_encode($out);




} catch (PDOException $e) {
    die("Cant connect to DATA BASE!" . $e->getMessage());
}

?>