<?php

namespace Emtudo\Units\Users\Http\Controllers;

use Illuminate\Http\Request;
use Emtudo\Support\Http\Controller;
use Emtudo\Units\Users\Http\Requests\CreateUserRequest;
use Emtudo\Domains\Users\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
    
    public function store(CreateUserRequest $request)
    {
        return $request->all();
    }
}
