<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Actions\Auth\User\RegisterUser;
use App\Http\Requests\Auth\RegisterRequest;
use Exception;

class RegisterUserController extends Controller
{
  public function create()
  {
    return view('auth.user.register');
  }

  public function store(RegisterRequest $request)
  {
    try {
      $response = RegisterUser::run($request->only(['email', 'password']), $request->nama);

      if ($response) {
        return redirect()->route('');
      } else {
        return redirect()->back()->with('error', 'Daftar gagal, silahkan daftar ulang!');
      }
    } catch (Exception $exc) {
        dd($exc->getMessage());
      return redirect()->back()->with('error', $exc->getMessage());
    }
  }
}