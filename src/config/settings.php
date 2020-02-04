<?php
$settings['displayErrorDetails'] = true;
$settings['addContentLengthHeader'] = false;

$settings['db']['host']   = getenv("DB_HOST");
$settings['db']['user']   = getenv("DB_USER");
$settings['db']['pass']   = getenv("DB_PASS");
$settings['db']['dbname'] = getenv("DB_NAME");