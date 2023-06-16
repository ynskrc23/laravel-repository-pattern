<?php
namespace App\Repositories\UserRepository;

interface IUser
{
    public function all();
    public function store($request);
    public function delete($id);
}
