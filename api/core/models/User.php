<?php


namespace Core\models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function index()
    {
        return self::all();
    }

    public function single($id)
    {
        return self::find($id);
    }

    public function create($request)
    {
        var_dump($request);
        /*return self::create([

        ]);*/
    }

    /*public function update($request)
    {
        return self::update($request);
    }

    public function delete($id)
    {
        $model = $this->single($id);
        return $model->delete();
    }*/
}