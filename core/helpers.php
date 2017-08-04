<?php

function view($view, $data = [])
{
    extract($data);
    $uri = 'views/' . $view . '.view.php';
    ob_start();
    require($uri);
    return ob_get_clean();
}

function redirect($path)
{
    header("Location: /{$path}");
}