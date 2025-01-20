<?php

use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\ErrorHandler\Error\FatalError;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('api')->prefix('api')->group(base_path('routes/api.php'));
            Route::middleware('api')->prefix('api')->group(base_path('routes/customer.php'));
            Route::middleware('api')->prefix('api')->group(base_path('routes/admin/jewellery.php'));
            Route::middleware('api')->prefix('api')->group(base_path('routes/admin/jewellery-props/other-props.php'));
            Route::middleware('api')->prefix('api')->group(base_path('routes/admin/jewellery-props/bracelet-props.php'));
            Route::middleware('api')->prefix('api')->group(base_path('routes/admin/jewellery-props/chain-props.php'));
            Route::middleware('api')->prefix('api')->group(base_path('routes/admin/jewellery-props/ring-and-necklace-props.php'));
            Route::middleware('api')->prefix('api')->group(base_path('routes/admin/insert.php'));
            Route::middleware('api')->prefix('api')->group(base_path('routes/admin/employee.php'));
            Route::middleware('api')->prefix('api')->group(base_path('routes/admin/precious-metal.php'));
            Route::middleware('api')->prefix('api')->group(base_path('routes/employee.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (AuthenticationException $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => $e->getMessage(),
                ], 401);
            }
        });
        $exceptions->render(function (\Symfony\Component\HttpKernel\Exception\HttpException $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => $e->getMessage(),
                ], 403);
            }
        });
        $exceptions->render(function (QueryException $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => Str::limit($e->getMessage(), '60'),
                ], 500);
            }
        });
        $exceptions->render(function (FatalError $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => Str::limit($e->getMessage(), '60'),
                ], 500);
            }
        });
    })->create();
