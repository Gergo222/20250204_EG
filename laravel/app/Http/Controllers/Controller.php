<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getUsers()
    {
        $users = User::query()
            ->get();

        return response()->json($users);
    }

    public function createUser(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function updateUser(User $user, Request $request)
    {
        $user->update($request->all());

        return response()->json($user);
    }

    public function deleteUser(User $user)
    {
        $user->delete();

        return response()->json("", 204);
    }
}
