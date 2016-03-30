<?php
define('APP_ROOT_DIR', __DIR__);
define('APP_DEFAULT_ROUTE','home');
define('APP_DEFAULT_PAGE','teletubbies');

try{
    $conn = new PDO("mysql:host=localhost;dbname=tk;charset=utf8mb4", 'root', 'root');
}
catch(PDOException $p){
    die($p->getMessage());
}