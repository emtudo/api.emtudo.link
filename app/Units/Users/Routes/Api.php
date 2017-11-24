<?php

namespace Emtudo\Units\Users\Routes;

use Emtudo\Support\Http\Routing\RouteFile;

class Api extends RouteFile
{
    public function routes()
    {
        $this->router->get('/users/{user}', 'UserController@show');
        $this->router->post('/users', 'UserController@store');
        $this->router->put('/users/{user}', 'UserController@update');
    }
}
