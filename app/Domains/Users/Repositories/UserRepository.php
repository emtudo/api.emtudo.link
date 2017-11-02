<?php 

namespace Emtudo\Domains\Users\Repositories;

use Emtudo\Support\Domain\Repository;
use Emtudo\Domains\Users\User;

class UserRepository extends Repository
{
    protected $modelClass = User::class;

    public function create(array $data = [])
    {
        $newData = $data;
        if (isset($newData['password'])) {
            $newData['password'] = bcrypt($newData['password']);
        }
        
        return parent::create($newData);
    }

    public function update($model, array $data = [])
    {
        $newData = $data;
        if (isset($newData['password'])) {
            $newData['password'] = bcrypt($newData['password']);
        }

        return parent::update($model, $newData);
    }
}