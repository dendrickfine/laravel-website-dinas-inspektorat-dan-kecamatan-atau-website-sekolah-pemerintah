<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        // Create and return a new user instance after a valid registration.
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // Override the showRegistrationForm method to return the view
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Override the register method to handle the registration process
    public function register(Request $request)
    {
        // Validate the incoming request
        $this->validator($request->all())->validate();

        // Create a new user using the create method
        $user = $this->create($request->all());

        // Fire the Registered event
        event(new Registered($user));

        // Automatically login the user after registration
        $this->guard()->login($user);

        // Redirect the user to the intended location
        return redirect($this->redirectPath())
            ->with('status', 'success')
            ->with('message', 'Registration successful!');
    }
}
