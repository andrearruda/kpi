<?php
namespace App\Action;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class HomeAction
{
    protected $route;

    public function __construct(\Slim\Router $router)
    {
        $this->setRoute($router);
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        return $response->withRedirect($this->getRoute()->pathFor('indicador'));
    }

    /**
     * @return \Slim\Router
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param \Slim\Router $route
     */
    public function setRoute($route)
    {
        $this->route = $route;
    }
}