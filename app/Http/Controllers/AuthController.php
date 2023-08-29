<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{

    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }
    

public function handleGithubCallback()
{
    try {
        $githubUser = Socialite::driver('github')->user();
    } catch (\Exception $e) {
        // Handle error if user denied access or other issues
        return redirect('/'); // Redirect back to login page or display an error message
    }
    
    // print_r($githubUser); exit;

    // Check if the user already exists in your database based on their GitHub ID
    $user = User::where('github_id', $githubUser->getId())->first();

    if (!$user) {
        // User doesn't exist, create a new user
        $user = new User();
        $user->name = $githubUser->getName();
        $user->email = $githubUser->getEmail();
        $user->github_id = $githubUser->getId();
        $user->save();
    }

    // Log the user in
    auth()->login($user);

    // Redirect the user to a dashboard or other appropriate page
    return redirect('/dashboard');
}


public function logout()
{
    Auth::logout();
    return redirect('/');
}


}
