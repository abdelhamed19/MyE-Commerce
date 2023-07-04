<?php
$rout->get("","pagecontroller@index");
$rout->get("payment","pagecontroller@payment");
$rout->post("/payment","pagecontroller@index");


