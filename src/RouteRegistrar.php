<?php

namespace Sun\EpayAlfa;

use Illuminate\Contracts\Routing\Registrar;

class RouteRegistrar
{
    public function __construct(
        private Registrar $router,
    ) {
    }

    public function routes(): void
    {
        $this->router->post('{provider}/callback', [
            'uses' => 'EpayAlfaController@callback',
            'as' => 'epayalfa.callback',
        ]);
    }
}
