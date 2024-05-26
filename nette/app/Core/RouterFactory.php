<?php

namespace App\Core;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;

class RouterFactory
{
    public static function createRouter(): Nette\Routing\Router
    {
        $router = new RouteList;

        // Přidej všechny svoje routy zde
        $router->addRoute('sign/in', 'Sign:in');
        $router->addRoute('sign/out', 'Sign:out');
        $router->addRoute('<presenter>/<action>', 'Home:default');

        return $router;
    }
}
