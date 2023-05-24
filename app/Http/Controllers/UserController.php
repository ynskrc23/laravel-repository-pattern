<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserController extends Controller
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getAll();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ]);

        $user = $this->userRepository->create($data);

        return redirect()->route('users.index')->with('message', 'User Created Successfully');
    }

    public function show($id)
    {
        $user = $this->userRepository->getById($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = $this->userRepository->getById($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$id,
            'password' => 'sometimes'
        ]);

        $user = $this->userRepository->update($data, $id);

        return redirect()->route('users.index')->with('message', 'User Updated Successfully');
    }

    public function destroy($id)
    {
        $this->userRepository->delete($id);

        return redirect()->route('users.index');
    }
}
