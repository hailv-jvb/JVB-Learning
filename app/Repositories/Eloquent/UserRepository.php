<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 16/01/2018
 * Time: 09:29
 */

namespace App\Repositories\Eloquent;

use App\User;
use App\Repositories\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function getBlankModel()
    {
        return new User();
    }
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::find($id);
    }
    public function store($data)
    {
        return User::create($data);
    }

    public function update($data,$id)
    {
        return User::find($id)->update($data);
    }

    public function delete($id)
    {
        return User::find($id)->delete();
    }
}