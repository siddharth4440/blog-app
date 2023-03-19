<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public static function login(Request $request)
    {
        try {
            $data = $request->toArray();
            $email = $data['email'];
            $password = $data['password'];

            $user = User::where('email', $email)->select(['name','password'])->first()->toArray();
            if (empty($user)) {
                return redirect('/register')->with('status', 'Please register!');
            }
            if ($user['password'] === $password) {
                session(['auth' => true,'user'=>$user['name']]);
                return redirect('/')->with('status', 'Login successfull!');
            }
            return redirect('/login')->with('status', 'password is invalid');
        } catch (\Exception $e) {
            \Log::error($e);
            return redirect('/login')->with('status', 'something went wrong');
        }
    }

    public static function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|unique:users',
            ]);

            if ($validator->fails()) {
                return redirect('/login')
                    ->with('status', 'email already exists');
            }
            $data = $request->toArray();
            $save = User::insert([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
            ]);
            if ($save) {
                session(['auth' => true]);
            } else {
                session(['auth' => false]);
            }
            return redirect('/');
        } catch (\Exception $e) {
            \Log::error($e);
            return redirect('/login');
        }
    }
}
