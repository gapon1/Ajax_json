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


    //======= insert data to DB  =========
    $stmt = $pdo->prepare("INSERT INTO ajaxData (name, lastname, age) VALUES (:name, :lastname, :age)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':age', $age);

    // insert a row
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $age = intval($_POST['age']);
    $stmt->execute();
    //======= Select data from DB ========




    $sql = 'SELECT id, name, lastname, age FROM ajaxData';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $rows =$stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row){
        echo "__" . $row['name'] . " - " . $row['lastname']. " - " . $row['age'];
        echo "<br>";
    }


//
//    $sql = 'DELETE FROM ajaxData WHERE id BETWEEN 2 AND 14';
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute();









} catch (PDOException $e) {
    die("Cant connect to DATA BASE!" . $e->getMessage());
}

?>