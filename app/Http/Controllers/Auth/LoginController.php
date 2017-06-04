<?php

namespace Softcomun\Http\Controllers\Auth;

use Softcomun\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function authenticate(Request $request)
    {
        // dd("asdasd");
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }


    public function postLogin(Request $request)
	{
	/*	$data = $this->validate($request, [
			'email' => 'required|email', 'password' => 'required',
		]);*/
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);
   
		$credentials = $request->only('email', 'password');
        // dd($credentials);
		if (Auth::attempt($credentials, $request->has('remember')))
		{
            $accesos = Auth::user()->accesos;

            $request->session()->put('accesos', $accesos );
           // dd($request);
			return redirect()->intended($this->redirectPath());
		}

        // dd($request->only('email', 'remember'));
        $usuario_email = User::where('email', $request->email)->first();
        $usuario_password = User::where('password', $request->password)->first();
       // dd($usuario);
		return redirect("/login")
					->withInput($request->only('email', 'remember'))
                    ->withInput($request->only('password', 'remember'))
					->withErrors([
                        
						$usuario_email ? "" : "email" =>  Lang::get('auth.failed'),
                        $usuario_password ? "" : "password" =>  Lang::get('auth.failedd'),
					]);
	}
}
