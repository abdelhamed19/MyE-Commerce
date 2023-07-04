<?php
return [
    "database"=>[
        "connection"=>"mysql:host=localhost",
        "dbname"=>"project",
        "username"=>"root",
        "password"=>"",
        "options"=>[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        ]
    ]
];
