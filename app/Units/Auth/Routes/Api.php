<?php

namespace Emtudo\Units\Auth\Routes;

use Emtudo\Support\Http\Routing\RouteFile;

class Api extends RouteFile
{
    public function routes()
    {
        $this->router->post('login', 'LoginController@login')->name('login');

        $this->router->post('refresh', 'LoginController@refresh')->name('refresh');
    }
}
