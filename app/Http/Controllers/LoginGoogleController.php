<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LoginGoogleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
            if ($finduser) {

                Auth::login($finduser);

                return redirect()->intended('/')->with('success', 'Đăng nhập thành công.');

            } else {
                $today = Carbon::now()->toDateString();
                $newUser = User::updateOrCreate(
                    [
                        'email' => $user->email,
                        'hoten' => $user->name,
                        'google_id' => $user->id,
                        'password' => Hash::make('123456'),
                        'email_verified_at' => $today,
                        'idrole' => 2,
                        'sdt' => "",
                        'ngaysinh' => '1900-01-01',
                        'diachi' => null,
                        'cccd' => "",
                    ]
                );

                Auth::login($newUser);

                return redirect()->intended('/trangcanhan')->with('success', 'Đăng nhập thành công.');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }



}
