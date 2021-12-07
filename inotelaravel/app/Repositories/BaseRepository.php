<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        $models = $this->model->latest()->paginate(3);
        return $models;
    }

    public function getById($id)
    {
        $models = $this->model->query()->findOrFail($id);
        return $models;
    }

    public function delete($id)
    {
        $models = $this->model->query()->findOrFail($id);
        $models->delete();
    }

    public function getAllCategory()
    {
        $categories = Category::all();
        return $categories;
    }


}
