<?php

namespace Emtudo\Support\Domain;

abstract class Repository
{
    protected $modelClass;
    protected $userOnly = false;

    public function newQuery()
    {
        $query = app()->make($this->modelClass)->newQuery();

        if ($this->userOnly) {
            $query->where('user_id', auth()->user()->id);
        }

        return $query;
    }

    public function userOnly($userOnly = false)
    {
        $this->userOnly = $userOnly;

        return $this;
    }

    public function getAll()
    {
        $model = $this->newQuery();

        return $model->get();
    }

    public function findId($id)
    {
        $model = $this->newQuery();

        return $model->find($id);
    }

    public function factory(array $data)
    {
        $model = $this->newQuery()->getModel()->newInstance();

        $model->fill($data);

        return $model;
    }

    public function create(array $data = [])
    {
        $model = $this->factory($data);

        $model->save();

        return $model;
    }

    public function update($model, array $data = [])
    {
        $updated = $model->fill($data);

        return $updated;
    }

    public function delete($model)
    {
        return $model->delete();
    }
}
