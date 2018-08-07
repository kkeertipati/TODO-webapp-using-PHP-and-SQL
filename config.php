<?php

/**
 * Configuration for database connection
 *
 */

$host       = "studentweb.comminfo.rutgers.edu";
$username   = "kk868";
$password   = "WXzU!jdb8PoT";
$dbname     = "class-2017-9-17-610-557-91_kk868"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );