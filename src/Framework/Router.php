<?php

declare(strict_types=1);

namespace Framework;

class Router
{
    private array $routes = [];

    public function addRoute(string $method, string $path)
    {
        $path = $this->normalizePath(($path));

        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => $path
        ];
    }

    private function normalizePath(string $path): string
    {
        $path = trim($path, "/");
        $path = "/{$path}/";
        $path = preg_replace("#[/]{2,}#", '/', $path);

        return $path;
    }
}
