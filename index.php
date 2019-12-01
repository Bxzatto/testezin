<?php

require __DIR__ . "/vendor/autoload.php";

$route = new \CoffeeCode\Router\Router(ROOT);

$route->namespace("Source\App");

$route->group(null);
$route->get("/","Web:home");
$route->get("/contato", "Web:contact");
$route->get("/teste", "Web:home");

$route->group("ops");
$route->get("/{errcode}", "Web:error");

$route->dispatch();

if ($route->error()){
    $route->redirect("/ops/{$route->error()}");
}