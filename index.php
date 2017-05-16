<?php
session_start();
include "config.php";
$action = isset($_GET['action'] ) ? $_GET['action'] : "";

switch($action)
{
    case 'res':
        results();
        break;
    case 'anketa':
        anketa();
        break;
    case 'create':
        create();
        break;
    default:
        homepage();
}

function homepage()
{
    $pageTitle = 'Анкета';
    require("templates/main.php" );
}
function results()
{
    $pageTitle = "Результат";
    require("templates/res.php" );
}
function anketa(){
  $pageTitle = "Анкета";
  require("templates/anketa.php");
}

function create(){
  $pageTitle = "Создать";
  require("templates/create.php");
}

?>
