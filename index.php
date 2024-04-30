<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request){
    case '/':
        require 'kgfenterprise.com.php';
        break;
    case '/index';
            require 'kgfenterprise.com.php';
            break;
    case '/index.php';
            require 'kgfenterprise.com.php';
            break;
    case 'kgfenterprise.com':
        require 'kgfenterprise.com/kgfenterprise.com.php';
        break;
    
    case '/blog':
        require 'blog.php';
        break;
    case '/shop':
        require 'shop.php';
        break;
    

}

?>