<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use HasRoles;

class LoginForm extends Component
{
    public $email;
    public $password;

    public function submit()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            // Authentication was successful
            if (Auth::user()->hasRole('admin')) {
                return redirect()->intended('/admin/dashboard');
            }
            if (Auth::user()->hasRole('employee')) {
                return redirect()->intended('/employee/dashboard');
            }
            if (Auth::user()->hasRole('customer')) {
                return redirect()->intended('/');
            }
        } else {
            // Authentication failed
            $this->addError('email', 'Invalid email or password.');
        }
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}