<?php

require "/usr/local/HelloSlim/Class/GitHubProvider.php";

//The following handles the POST requests sent to the /result route
$app->post('/result', function() use ($app){
    //The following statement checks if 'name' has been POSTed. If it has, it assigns the value to the $name variable. If it hasn't been set, it assigns a blank string.
    $count = 0;
    $name = (null !== $app->request->post('name'))?$app->request->post('name'):'';
    $name = urlencode($name);

    // grab the data & url from 1 external source being GitHub
    $external_request = new GitHubProvider;
    $searched = $external_request->get_content($name);
    $external_url = $external_request->get_resource_url($name);

    try {
        $count = count($searched);
        if ($count <= 1) {
            $searched = "0 results";
        }
    } catch (Exception $e) {
        $searched = "No results";
    }

    // the following statement invokes and displays the 'result.php' View.
    // It also passes the $name, $searched, $count + $source variables in an array so that the view can use them.
    $app->render('result.php', array(
        'name' => $name,
        'searched' => $searched,
        'count' => $count,
        'source' => $external_url
    ));
});