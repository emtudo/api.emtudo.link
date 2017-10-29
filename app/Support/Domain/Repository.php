<?php 

namespace Emtudo\Support\Domain;

abstract class Repository
{
    protected $modelClass;

    public function makeModel()
    {
        return $this->model = app()->make($this->modelClass);
    }

    public function all()
    {
        $model = $this->makeModel();

        return $model->get();
    }

    public function find($id)
    {
        $model = $this->makeModel();

        return $model->find($id);
    }

    public function create(array $data = [])
    {
        $model = $this->makeModel();
        $model->fill($data);

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