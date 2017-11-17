<?php

namespace Emtudo\Units\Auth\Http\Controllers;

use Emtudo\Support\Http\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * @param Request $request
     * @param Guard   $auth
     */
    public function login(Request $request, Guard $auth)
    {
        $credentials = $request->only(['email', 'password']);

        if ($auth->attempt($credentials)) {
            return response()->json(['token' => $auth->issue()], 200);
        }

        return response()->json('Erro ao autenticar.', 500);
    }

    /**
     * @param Request $request
     * @param Guard   $auth
     */
    public function refresh(Request $request, Guard $auth)
    {
        // refresh token.
        $token = $auth->refresh();

        if (!$token) {
            return response()->json('Erro ao atualizar token.', 500);
        }

        return response()->json(['token' => $token], 200);
    }
}
