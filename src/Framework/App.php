<?php

#This class is for preparing the framework tools

declare(strict_types=1);

namespace Framework;

use Framework\Router;

class App
{
    private Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function run()
    {
        echo "application is running.";
    }

    public function getRoute(string $path)
    {
        $this->router->addRoute('GET', $path);
    }
}
