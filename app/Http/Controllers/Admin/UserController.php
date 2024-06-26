<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate();
        return $users;
    }

    public function store()
    {
        request()->validate([
            "name"=> "required|max:255",
            'email' => 'required|unique:users,email',
            'password'=> 'required|min:8',
        ]);

        return User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

    }

    public function update(User $user)
    {
        request()->validate([
            'name'=> 'required|max:255',
            'email' => 'required|unique:users,email,'.$user->id,
            'password'=> 'sometimes|min:8',
        ]);

        $user->update([
           'name' => request('name'),
           'email' => request('email'),
           'password' => request('password') ? bcrypt(request('password')) : $user->password,
        ]);

        return $user;
    }

    public function destroy(User $user)
    {
        //dd($user);
        $user->delete();
        return response()->noContent();
    }

    public function changeRole(User $user)
    {
        $user->update([
           'role' => request('role'),
        ]);
        return response()->json(['success' => true]);
    }

    public function search()
    {
        $searchQuery = request('query');
        $users = User::where('name', 'like', "%{$searchQuery}%")->paginate();
        return response()->json($users);
    }



}
