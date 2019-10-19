<?php

$username = 'postgres';
$password = 'password';
$dbname = 'postgres';
$host = '192.168.209.127';
$port = '5432';
$schema = 'public';

$dbc = pg_connect('host='.$host.' port='.$port.' dbname='.$dbname.' user='.$username.' password='.$password);
