<?php declare(strict_types=1);

namespace PHP;

use Zend;
use League\{
    Container, Route, Plates
};
use Narrowspark\HttpEmitter;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require '../vendor/autoload.php';

/*
 * I didn't use a framework
 * :^)
 */

$container = new Container\Container();
$container->addServiceProvider(new ServiceProvider\LeagueServiceProvider());

$router = $container->get(Route\Router::class);

$router->get('/', function (Request $request) use($container): Response {
    $engine = $container->get(Plates\Engine::class);
    return new Zend\Diactoros\Response\HtmlResponse($engine->render('landing'));
});

/*
 * /getting-started -> getting-started/introduction/what-is-php
 */
$router->get('/getting-started', function(): Response {
    return new Zend\Diactoros\Response\RedirectResponse('/getting-started/introduction/what-is-php');
});

$pages = [
    'getting-started/introduction/what-is-php',
    'getting-started/introduction/what-can-php-do',
    'getting-started/installation',
    'getting-started/installation/linux',
    'getting-started/installation/windows',
    'getting-started/installation/macos',
    'getting-started/installation/other-platforms',
];

foreach ($pages as $page) {
    $router->get('/'.$page, function (Request $request) use($container, $page) : Response  {
        $engine = $container->get(Plates\Engine::class);
        return new Zend\Diactoros\Response\HtmlResponse($engine->render($page));
    });
}

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals();
$response = $router->dispatch($request);

(new HttpEmitter\SapiEmitter)->emit($response);