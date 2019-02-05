<?php declare(strict_types=1);

namespace PHP;

use Zend;
use League;
use Narrowspark\HttpEmitter;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use function json_decode;
use function file_get_contents;

require '../vendor/autoload.php';

$container = new League\Container\Container();
$container->addServiceProvider(new ServiceProvider\LeagueServiceProvider());

$router = $container->get(League\Route\Router::class);

// landing
$router->get('/', function (Request $request) use($container): Response {
    $engine = $container->get(League\Plates\Engine::class);
    $releases = json_decode(file_get_contents(__DIR__ . '/../resources/releases.json'), true);
    $events = json_decode(file_get_contents(__DIR__ . '/../resources/events.json'), true);
    $articles = json_decode(file_get_contents(__DIR__ . '/../resources/articles.json'), true);
    return new Zend\Diactoros\Response\HtmlResponse($engine->render('landing', [
        'releases' => $releases,
        'events' => $events,
        'articles' => $articles
    ]));
});

$router->get('/get-involved', function(Request $request) use($container): Response {
    $engine = $container->get(League\Plates\Engine::class);
    $contributors = json_decode(file_get_contents(__DIR__ . '/../resources/contributors.json'), true);
    return new Zend\Diactoros\Response\HtmlResponse($engine->render('get-involved', [
        'contributors' => $contributors,
    ]));
});

// redirect /getting-started to 'what-is-php' section
$router->get('/getting-started', function(): Response {
    return new Zend\Diactoros\Response\RedirectResponse('/getting-started/introduction/what-is-php');
});

// Pages that don't need any context.
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
        $engine = $container->get(League\Plates\Engine::class);
        return new Zend\Diactoros\Response\HtmlResponse($engine->render($page));
    });
}

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals();
$response = $router->dispatch($request);

(new HttpEmitter\SapiEmitter)->emit($response);