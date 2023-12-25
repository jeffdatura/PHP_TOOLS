<?php

namespace Codespace\PhpTools\Models;

class Router
{
    private array $routes;

    public function __construct()
    {
        $this->routes = [];

    }

    /**
     * @param string $method
     * @param string $path
     * @param string $controller
     * @param string $action
     * @return void
     */
    public function addRoute(string $method, string $path, string $controller, string $action): void
    {
        $this->routes [] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }

    /**
     * @param string $method
     * @param string $uri
     * @return array|null
     */
    public function getHandler(string $method, string $uri): ?array
    {
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $uri) {
                return [
                    'method' => $route['method'],
                    'controller' => $route['controller'],
                    'action' => $route['action'],
                ];
            }
        }
        return null;
    }
}