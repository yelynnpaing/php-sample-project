<?php
 
 include ("vendor/autoload.php");

//  use Helpers\Auth;
//  use Helpers\HTTP;
//  use Libs\Database\MySQL;
//  use Libs\Database\UsersTable;

//  Auth::check();
//  HTTP::redirect();

//  $db = new MySQL;
//  $db->connect();

//  $table = new UsersTable;
//  $table->insert();

// use Helpers\HTTP;
// HTTP::redirect("/index.php", "redirect = test");


// use Helpers\Auth;
// $user = Auth::check();
// print_r($user);

// use Libs\Database\MySQL;

// $mysql = new MySQL;
// $db = $mysql->connect();

// $result = $db->query("SELECT * FROM roles");
// print_r($result->fetchAll());

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL);
$table->insert([
    "name" => "Bobo",
    "email" => "Bobo@gmial.com",
    "phone" => "09900",
    "address" => "yangon",
    "password" => "password",
]);
print_r($table->getAll());

?>





