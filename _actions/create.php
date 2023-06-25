<?php

include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$table = new UsersTable(new MySQL);
$data = ([
    "name" => $_POST['name'],
    "email" => $_POST['email'],
    "phone" => $_POST['phone'],
    "address" => $_POST['address'],
    "password" => $_POST['password'],
]);

if($table){
    $table->insert($data);
    HTTP::redirect("/index.php", "register=success");
}

