<?php


require __DIR__ . "/vendor/autoload.php";


use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace("Source\Controllers");

$router->group(null);


$router->get("/", "Crud:read");
$router->get("/read/{id}", "Crud:read");
$router->get("/register", "Crud:registerForm");
$router->get("/register/{id}", "Crud:registerForm");
$router->post("/create", "Crud:create");
$router->put("/update/{id}", "Crud:update");
$router->delete("/delete", "Crud:delete");


$router->dispatch();