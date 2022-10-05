<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Photo;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Display the Admin Login View.
     *
     * @return void
     */
    public function createAdmin()
    {
        return view('admins.dashboard.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $role = User::where('email', '=', $request->email)->first();
        if ($role->roleID == 2) {
            return redirect()->intended(RouteServiceProvider::TUTORHOME);
        } else if ($role->roleID == 3) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    }

    /**
     * Handle an incoming Admin authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeAdmin(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::ADMINHOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * To render Google Login Page
     *
     * @return void
     */
    public function renderGoogleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Function to catch Google API Callback
     *
     * @return void
     */
    public function handleProviderCallback()
    {
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            'name' => $callback->getName(),
            'email' => $callback->getEmail(),
            'avatar' => $callback->getAvatar(),
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'username' => str_replace(' ', '', $callback->getName()) . (string)rand(1, 9) . (string)rand(1, 9) . (string)rand(1, 9),
            'roleID' => 3,
        ];

        Photo::create([
            'types' => 'avatar',
            'imageURL' => $data['avatar'],
        ]);

        $user = User::firstOrCreate(['email' => $data['email']], $data);
        Auth::login($user, true);

        return redirect(route('user.dashboard'));
    }
}
