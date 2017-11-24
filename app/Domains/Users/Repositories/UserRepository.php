<?php

namespace Emtudo\Domains\Users\Repositories;

use Emtudo\Domains\Users\User;
use Emtudo\Support\Domain\Repository;

class UserRepository extends Repository
{
    protected $modelClass = User::class;

    public function create(array $data = [])
    {
        $newData = $data;
        if (isset($newData['password'])) {
            $newData['password'] = $newData['password'];
        }

        return parent::create($newData);
    }

    public function update($model, array $data = [])
    {
        $newData = $data;
        if (isset($newData['password'])) {
            $newData['password'] = $newData['password'];
        }

        return parent::update($model, $newData);
    }
}
