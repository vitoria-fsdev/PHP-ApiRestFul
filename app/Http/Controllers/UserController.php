<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); 
        return response()->json($users, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        try {
            $user = new User(); 
            $user->fill($data);
            $user->password = bcrypt('defaultPassword123');
            $user->save();
            return response()->json($user, 201);
        } catch (\Exception $ex) {
            return response()->json(['message' => 'Falha ao criar o usuário!'], 400);
        }
    }

    public function show(string $id)
    {   
        try {
            $user = User::findOrFail($id); 
            return response()->json($user, 200);
        } catch (\Exception $ex) {
            return response()->json(['message' => 'Falha ao buscar usuário!'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
