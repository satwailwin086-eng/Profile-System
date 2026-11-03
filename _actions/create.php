<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$table = new UsersTable(new MySQL);
 $table->insert([
    "name" => $_POST["name"],
    "email" => $_POST["email"],
    "phone" => $_POST["phone"],
    "address" => $_POST["address"],
    "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
]);

HTTP::redirect("/index.php", "register=success");
