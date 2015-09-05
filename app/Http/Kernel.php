<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,

        //Oauth2 authentication
        'LucaDegasperi\OAuth2Server\Middleware\OAuthExceptionHandlerMiddleware',

     //   \App\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
    //Se comenta para poner la authentication por Oauth2 
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'auth.basic.once' => \App\Http\Middleware\OnceAuth::class,    
        'oauth' => 'App\Http\Middleware\OAuthMiddleware',
        'oauth-user' => 'LucaDegasperi\OAuth2Server\Middleware\OAuthUserOwnerMiddleware',
        'oauth-client' => 'LucaDegasperi\OAuth2Server\Middleware\OAuthClientOwnerMiddleware',
        'check-authorization-params' => 'LucaDegasperi\OAuth2Server\Middleware\CheckAuthCodeRequestMiddleware',
        //'csrf' => 'App\Http\Middleware\VerifyCsrfToken',

       // 'oauth' => 'App\Http\Middleware\OAuthMiddleware',
    ];
}
