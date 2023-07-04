<?php
namespace app\controllers;
class pagecontroller
{
    public function index()
    {
        //return require "app/views/index.php";
        return view("app/views/index.php");
    }
    public function payment()
    {
      //return require "app/views/payment.php";
        return view("app/views/payment.php");
    }
}
