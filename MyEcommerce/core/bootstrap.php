<?php
use app\controllers\pagecontroller;
use core\database\connection;
use core\database\QueryBuilder;
$app['config']= require "config.php";
$app['database']= new QueryBuilder(connection::make($app['config']['database']));
$app['database']->insert();


function view($filename)
{
    return require $filename;
}
