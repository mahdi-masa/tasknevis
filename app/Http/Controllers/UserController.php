<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function createUser($root, $arg)
    {
        $user = User::create($arg);

        return $user;
    }

    public function show($root, $arg)
    {
        $user = User::findOrFail($arg['id']);

        return $user;
    }

    public function update($root, array $arg)
    {
        Log::info($root);
        $user = User::find($arg['id']);
        $user->update($arg['input']);

        return $user;
    }
}
