<?php

namespace Emtudo\Units\Links\Routes;

use Emtudo\Support\Http\Routing\RouteFile;

class Api extends RouteFile
{
    public function routes()
    {
        $this->router->get('/links', 'LinkController@index')
            ->middleware('auth');
        $this->router->post('/links', 'LinkController@store');
        $this->router->get('/links/{link}', 'LinkController@show');
    }
}
