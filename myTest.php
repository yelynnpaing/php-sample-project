<?php
$db = new PDO('mysql:dbhost=localhost; dbname=project', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
] );

$statement = $db->query("SELECT * FROM roles");
$result = $statement->fetchAll();
print_r($result);


// $sq1 = "INSERT INTO roles (name, value) VALUE('Supervisor', 5)";
//  $db->query($sq1);
// echo $db->lastInsertId();

//prepare statement
// $sq2 = "INSERT INTO roles (name, value) VALUES(:name, :value)";
// $statement = $db->prepare($sq2);
// $statement->execute([
//     ':name' => 'God',
//     ':value' => 99,
// ]);

// echo $db->lastInsertId();


//UPDATE
// $sq1 = "UPDATE roles SET name = :name WHERE value = 99";
// $statement = $db->prepare($sq1);
// $statement->execute([
//     ':name' => 'Superman',
// ]);

// echo $statement->rowCount();


//DELETE
$sq1 = "DELETE FROM roles WHERE id > 3";
$statement = $db->prepare($sq1);
$statement->execute();

echo $statement->rowCount();



