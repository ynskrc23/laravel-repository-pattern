<?php
namespace App\Services;

use App\Repositories\UserRepository\IUser;

class UserService
{
    public function __construct(public IUser $repository)
    {
    }
    public function all()
    {
        $users = $this->repository->all();

        return $users;
    }

    public function store($request)
    {
        $store = $this->repository->store($request);

        return $store;
    }

    public function delete($id)
    {
        $user = $this->repository->delete($id);

        return $user;
    }
}
