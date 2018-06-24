<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function all()
    {
        $users = Users::all();
        return response()->json($users, 200);
    }

    public function one($id)
    {
        if(!is_numeric($id))
            return response()->json('Id must be a numeric', 400);

        $user = Users::find($id);
        return response()->json($user, 200);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user = Users::create($request->all());

        return response()->json('User created', 201);

    }
}
