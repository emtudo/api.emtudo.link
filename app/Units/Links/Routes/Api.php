<?php 

namespace Emtudo\Units\Links\Routes;
use Emtudo\Support\Http\Routing\RouteFile;

class Api extends RouteFile
{
    public function routes()
    {
       $this->router->get('/links', function () {
          return 'links';
       });
    }
}