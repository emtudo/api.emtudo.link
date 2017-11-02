<?php

namespace Emtudo\Units\Links\Http\Controllers;

use Illuminate\Http\Request;
use Emtudo\Support\Http\Controller;
use Emtudo\Units\Links\Http\Requests\CreateLinkRequest;
use Emtudo\Domains\Links\Link;
use Emtudo\Domains\Users\User;
use Emtudo\Domains\Links\Repositories\LinkRepository;

class LinkController extends Controller
{
    public function __construct()
    {
        $user = User::first();
        \Auth::login($user);
    }

    public function index()
    {
        return Link::all();
    }
    
    public function store(CreateLinkRequest $request, LinkRepository $repository)
    {
        $data = $request->all();
        $link = $repository->create($data);

        if ($link) {
            return response()->json($link);
        }
        
        return response()->json('Falha', 422);
    }
}
