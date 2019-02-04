<?php declare(strict_types=1);

namespace PHP\ServiceProvider;

use League\Route;
use League\Plates;
use League\Container\ServiceProvider\AbstractServiceProvider;

class LeagueServiceProvider extends AbstractServiceProvider {
    public $provides = [
        Route\Router::class,
        Plates\Engine::class
    ];

    public function register(): void {
        $container = $this->getContainer();

        $container->share(Route\Router::class, function() use ($container) {
            $router = new Route\Router();
            $startegy = new Route\Strategy\ApplicationStrategy();
            $startegy->setContainer($container);
            $router->setStrategy($startegy);
            return $router;
        });

        $container->share(Plates\Engine::class, function () use ($container) {
            return new Plates\Engine(__DIR__.'/../../templates');
        });
    }
}
