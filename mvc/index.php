<?php

require_once ('vendor/autoload.php');
require_once('config.php');

if(isset($_GET['p'])){
    $currP = $_GET['p'];
}

else{
    $currP = APP_DEFAULT_ROUTE;
}

switch($currP){
    case "home":
        $page = new \Controller\PageController();
        $page->homeAction();
        break;
    case "about":
        $page = new \Controller\PageController();
        $page->aboutAction();
        break;
}

