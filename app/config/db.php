<?php

return [
    'host' => getenv('MYSQL_HOST') ?: getenv('DB_HOST') ?: '127.0.0.1',
    'port' => getenv('MYSQL_PORT') ?: '3306',
    'dbname' => getenv('MYSQL_DBNAME') ?: 'jobseeker',
    'username' => getenv('MYSQL_USERNAME') ?: 'root',
    'password' => getenv('MYSQL_PASSWORD') ?: ''
];

?>