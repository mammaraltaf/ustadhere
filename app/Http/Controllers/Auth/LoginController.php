<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => ($input['password']))))
        {
            if ((auth()->user()->role) == 0) {
                if ((auth()->user()->status) != 1) {
                    auth()->logout();
                    return redirect()->route('login')
                        ->withErrors(['error'=>'Your account is not active'])
                        ->withInput($request->session()->put('data', $request->input()));
                }
                return redirect()->route('user.index');
            }
            else if ((auth()->user()->role) == 1) {
                return redirect()->route('admin.index');
            }
            else{
                return redirect()->route('/');
            }
        }else{
            return redirect()->route('login')
                ->withErrors(['error'=>'Incorrect username or password'])
                ->withInput($request->session()->put('data', $request->input()));
        }

    }
}
