<?php
// connect to the mysql database (only the test environment info)
$link = mysqli_connect('localhost', 'user', 'pass', 'dbname');
mysqli_set_charset($link, 'utf8');
