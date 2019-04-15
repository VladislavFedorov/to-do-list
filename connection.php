<?php

define("hostname", "localhost");
define("username", "root");
define("password", "");
define("database", "todolist");
define("table", "todo");

function db(){
    global $link;
    $link = mysqli_connect(hostname, username, password, database) or die("couldn’t connect to db");
    return $link;
};