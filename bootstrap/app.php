<?php

use App\Http\Middleware\ClearCacheMiddleware;
use App\Http\Middleware\SessionAuth;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'cache.clear' => ClearCacheMiddleware::class,
            'session.auth' => SessionAuth::class,
        ]);
        $middleware->web(append: [
            \App\Http\Middleware\CallModifyLastLogin::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->withBindings([
        'path.storage' => function () {
            return dirname(__DIR__).'/storage';
        },
    ])->create();
