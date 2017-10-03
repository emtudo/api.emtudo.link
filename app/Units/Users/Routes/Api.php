<?php 

namespace Emtudo\Units\Users\Routes;
use Emtudo\Support\Http\Routing\RouteFile;

class Api extends RouteFile
{
    public function routes()
    {
       $this->router->get('/users', function () {
          return 'users';
       });
    }
}