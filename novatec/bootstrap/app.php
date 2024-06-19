<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// NUEVOS AGREGADOS
use App\Http\Middleware\CheckUserSession;
use App\Http\Middleware\RedirectIfAuthenticated;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('guest',[RedirectIfAuthenticated::class]);
        $middleware->appendToGroup('checksession',[CheckUserSession::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();