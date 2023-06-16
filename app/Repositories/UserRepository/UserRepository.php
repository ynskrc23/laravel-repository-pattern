<?php
namespace App\Repositories\UserRepository;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements IUser
{
    protected $model;
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        $users = User::orderBy('id', 'desc')->paginate(15);

        return $users;
    }

    public function store($request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return $user;
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
}
