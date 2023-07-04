<?php
require "vendor/autoload.php";
use core\router;
use core\request;
require "core/bootstrap.php";
router::load("app/routes.php")->direct(request::uri(),request::method());

//require "app/views/index.php";
//require "app/views/payment.php";