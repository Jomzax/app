<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Signup extends Component
{
    public $username;
    public $email;
    public $password;
    public $errorUsername;
    public $errorEmail;
    public $errorPassword;
    public $error = null;

    public function signup(){
        $this->errorUsername = null;
        $this->errorEmail = null;
        $this->errorPassword = null;

        $validator = Validator::make([
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
        ],[
            'username' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            $this->errorUsername = $validator->errors()->get('username')[0] ?? null;
            $this->errorEmail = $validator->errors()->get('email')[0] ?? null;
            $this->errorPassword = $validator->errors()->get('password')[0] ?? null;
        } else {
            $user = User::create([
                'name' => $this->username,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            session()->put('user_id', $user->id);
            session()->put('user_name', $user->name);
            $this->redirect('/dashboard');
        }    
    }

    public function goToSignin()
    {
        return redirect()->route('signin');
    }

    public function render()
    {
        return view('livewire.signup');
    }
}