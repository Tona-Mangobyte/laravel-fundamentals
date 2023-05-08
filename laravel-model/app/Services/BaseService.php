<?php

namespace app\Services;

use Illuminate\Database\Eloquent\Model;

abstract class BaseService
{
    public function __construct(public Model $model){}

    public function getAll() {
        return $this->model->all();
    }
    public function getOne($id) {
        return $this->model->find($id);
    }
    public function createOrUpdate($args) {
        $this->model->fill($args)->save();
        return $this->model;
    }
    public function delete($id) {
        $model = $this->model->find($id);
        return $model->delete();
    }
}
