<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model as Entity;

abstract class BaseService
{
    public function __construct(public Entity $entity){}

    public function newEntityQuery() {
        return $this->entity->newModelQuery();
    }
    public function newQuery(): Builder
    {
        return $this->entity->newQuery();
    }

    public function newQueryWithoutRelationships() {
        return $this->entity->newQueryWithoutRelationships();
    }

    public function where($column, $operator = null, $value = null, $boolean = 'and') {
        return $this->entity->where($column, $operator, $value, $boolean);
    }

    public function getAll() {
        return $this->entity->all();
    }
    public function getOne($id) {
        return $this->entity->find($id);
    }
    public function createOrUpdate($args) {
        $this->entity->fill($args)->save();
        return $this->entity;
    }
    public function delete($id) {
        $entity = $this->entity->find($id);
        return $entity->delete();
    }

    public function cloneQueryBuilder(): Builder
    {
        return $this->entity->newQuery()->clone();
    }
}
