<?php

namespace Emtudo\Units\Users\Http\Controllers;

use Emtudo\Domains\Users\Repositories\UserRepository;
use Emtudo\Support\Http\Controller;
use Emtudo\Units\Users\Http\Requests\CreateUserRequest;
use Emtudo\Units\Users\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function store(CreateUserRequest $request, UserRepository $repository)
    {
        $data = $request->all();
        $user = $repository->create($data);

        if ($user) {
            return $this->respond->ok($user);
        }

        return $this->respond->error('Ocorreu um erro interno');
    }

    public function show($id, UserRepository $repository)
    {
        $user = $repository->find($id);
        if (!$user) {
            return $this->respond->notFound('Usuário não encontrado');
        }

        return $this->respond->ok($user);
    }

    public function update($id, UpdateUserRequest $request, UserRepository $repository)
    {
        $user = $repository->find($id);
        if (!$user) {
            return $this->respond->notFound('Usuário não encontrado');
        }

        $data = $request->all();
        $repository->update($user, $data);

        return $this->respond->ok($user);
    }
}
