<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function authenticate(Request $request)
    {
        Session::flash('username', $request->username);

        $messages = [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
        ];

        $request->validate(
            [
                'username'  => 'required',
                'password'  => 'required'
            ],
            $messages
        );

        $login = [
            'username'  => $request->username,
            'password'  => $request->password
        ];

        if (Auth::attempt($login, $request->remember)) {
            return redirect()->intended('formbox')->with('success', 'Berhasil Login');
        } else {
            // kalau otentikasi gagal
            return redirect('/')->withErrors('Username dan Password tidak valid !!');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Anda Berhasil Logout');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
