<?php

// phpinfo();

echo "Hello World!";

//Connect to database postgres sql
$host = "host.docker.internal";
$port = "5432";
$dbname = "postgres";
$password = "root";
$database = "test";

$connection = pg_connect("host=$host port=$port dbname=$database user=$dbname password=$password");

if (!$connection) {
    die("Connection failed: " . pg_last_error());
} else 
{
    echo "Connected successfully";
}