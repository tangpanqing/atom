<?php
require "bootstrap.php";

app()->any("/", function ($req) {
    return "hello world";
});

app()->any("/city", function ($req) {
    return \controller\IndexController::city($req);
});

app()->any("/userAdd", function ($req) {
    return \controller\IndexController::userAdd($req);
});

app()->any("/userQuery", function ($req) {
    return \controller\IndexController::userQuery($req);
});

app()->run();