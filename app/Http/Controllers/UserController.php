<?php
namespace App\Http\Controllers;

use App\Http\Requests\Create\UserStoreRequest;
use App\Services\UserService;

class UserController extends Controller
{
    public function __construct(public UserService $service)
    {
    }
    public function all()
    {
        $users = $this->service->all();
        dd($users);
    }

    public function store(UserStoreRequest $request)
    {
        $store = $this->service->store($request);
        dd($store);
    }

    public function delete($id)
    {
        $delete = $this->service->delete($id);
        dd($delete);
    }
}
