<?php


namespace Core\models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['login', 'email', 'phone', 'password'];

    public function index()
    {
        return self::all();
    }

    public function single($id)
    {
        return self::find($id);
    }

    public function create($data)
    {
        $this->login = $data['login'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->password = password_hash($data['password'], PASSWORD_DEFAULT); // password_verify() for check password
        return $this->save();
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