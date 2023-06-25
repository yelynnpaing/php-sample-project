<?php
include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
use Helpers\Auth;

$user = Auth::check();

$table = new UsersTable(new MySQL);
$name = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if($type === "image/jpeg" or $type === "image/png") {

    move_uploaded_file($tmp, "photos/$name");
    $table->updatePhoto($user->id, $name);
    $user->photo = $name;

    HTTP::redirect("/profile.php");
} else {
    HTTP::redirect("/profile.php", "error=type");
}