<?php

require __DIR__."/../vendor/autoload.php";

use Source\Models\User;

$user = new User();
$user->nome = "Predro chupa rola de rogerin";
$user->save();

print_r($user);