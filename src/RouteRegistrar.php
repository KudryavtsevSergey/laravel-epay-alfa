<?php

namespace Sun\EpayAlfa;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Routing\Router;
use Sun\EpayAlfa\Http\Middleware\ChecksumVerifier;
use Sun\EpayAlfa\Http\Middleware\SafeWrapper;

class RouteRegistrar
{
    protected Registrar $router;

    public function __construct(Registrar $router)
    {
        $this->router = $router;
    }

    public function routes()
    {
        $this->router->group(['middleware' => [SafeWrapper::class, ChecksumVerifier::class]], function (Router $router) {
            $router->post('{provider}/callback', [
                'uses' => 'EpayAlfaController@callback',
                'as' => 'epayalfa.callback',
            ]);
        });
    }
}
