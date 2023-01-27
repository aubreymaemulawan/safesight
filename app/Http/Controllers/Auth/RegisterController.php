<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
<<<<<<< HEAD
use Auth;
=======


use Auth;






>>>>>>> b7d8317530c338568699ba1e5de064d0db9648fd
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    public function redirectTo(){
        $user_type = Auth::user()->user_type;
        switch($user_type){
            case 1:  
                return redirect()->guest(route('user'));
                break;
            case 2:
                return redirect()->guest(route('police'));
                break;
            default:
                return '/';
                break;
        }
    }

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone_no' => ['required', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ],[
            'email.required' => 'The username has already been taken.'
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'address' => $data['address'],
            'phone_no' => $data['phone_no'],
            'user_type' => 1,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
