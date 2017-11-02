<?php

namespace Emtudo\Units\Users\Http\Controllers;

use Illuminate\Http\Request;
use Emtudo\Support\Http\Controller;
use Emtudo\Units\Users\Http\Requests\CreateUserRequest;
use Emtudo\Units\Users\Http\Requests\UpdateUserRequest;
use Emtudo\Domains\Users\Repositories\UserRepository;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(CreateUserRequest $request, UserRepository $repository)
    {
        $data = $request->all();
        $user = $repository->create($data);

        if ($user) {
            return response()->json($user);
        }
        
        return response()->json('Falha', 422);
    }

    public function update($id, UpdateUserRequest $request, UserRepository $repository)
    {
        $user = $repository->find($id);
        if (!$user) {
            return response()->json('Usuário não encontrado');
        }

        $data = $request->all();
        $repository->update($user, $data);

        return response()->json($user);
    }
}
