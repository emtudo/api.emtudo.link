<?php

namespace Emtudo\Units\Links\Http\Controllers;

use Illuminate\Http\Request;
use Emtudo\Support\Http\Controller;
use Emtudo\Units\Links\Http\Requests\CreateLinkRequest;
use Emtudo\Domains\Links\Link;

class LinkController extends Controller
{
    public function index()
    {
        return Link::all();
    }
    
    public function store(CreateLinkRequest $request)
    {
        $link = new Link;
        $link->fill($request->all());
        $link->user_id = 1;
        $link->save();        

        return $link;
    }
}
