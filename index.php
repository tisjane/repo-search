<?php

require '/usr/local/Slim/Slim.php';     //include the framework in the project

\Slim\Slim::registerAutoloader();       //register the autoloader

$projectDir = '/usr/local/HelloSlim';   //define the directory containing the project files
$app = new \Slim\Slim(array(
    'templates.path' => $projectDir.'/Views',   //instantiate a new Framework Object and define the path to the folder that holds the views for this project
    'debug' => true,
    'log.enabled' => true,
    'log.level' => \Slim\Log::DEBUG
));
require "$projectDir/routes.php";     //include the file which contains all the routes/route inclusions

$app->run();                          //load the application