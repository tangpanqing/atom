<?php
require "bootstrap.php";

app()->any("/", function($res){
    return "hello world";
});

app()->runCommon();