<?php

$app->get('/', function(){
    echo 'This is a simple starting page that I have done for Squiz.';
    echo 'To start simple have the following URL: localhost/hello';
    echo 'or to be more personable follow the following URL: localhost/hello/Imperial';
});

//The following handles any request to the /hello route
$app->get('/hello', function() use ($app){
    // the following statement invokes and displays the hello.php View
    $app->render('hello.php');
});

//The following handles any dynamic requests to the /hello/NAME routes (like /hello/Imperial)
$app->get('/hello/:name', function($name) use ($app){
    // the following statement invokes and displays the hello.php View.
    //It also passes the $name variable in an array so that the view can use it.
    $app->render('hello.php', array('name' => $name));
});