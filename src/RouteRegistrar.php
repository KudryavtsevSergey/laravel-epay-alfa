<?php

namespace Sun\EpayAlfa;

use Illuminate\Contracts\Routing\Registrar;

class RouteRegistrar
{
    protected Registrar $router;

    public function __construct(Registrar $router)
    {
        $this->router = $router;
    }

    public function routes(): void
    {
        $this->router->post('{provider}/callback', [
            'uses' => 'EpayAlfaController@callback',
            'as' => 'epayalfa.callback',
        ]);
    }
}
