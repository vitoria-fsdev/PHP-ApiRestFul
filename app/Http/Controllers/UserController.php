<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

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
    public function update(UpdateUserRequest $request, string $id)
    {   
        try {
            $user = User::findOrFail($id); // Se não achar, vai pro catch
            $data = $request->validated();
            $user->update($data);
            return response()->json($user, 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            // Tratamento específico para quando não encontra o ID
            // Acionado pelo findOrFail dexando o codigo mais organizado e sem parecer repetitivo
            return response()->json(['message' => 'Usuário não encontrado!'], 404);
        } catch (\Exception $ex) {
            return response()->json(['message' => 'Erro interno no servidor'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return response()->json(['message' => 'Usuário deletado com sucesso!', 200]);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Falha ao deletar o usuário!'], 400);
        }
    }
}
