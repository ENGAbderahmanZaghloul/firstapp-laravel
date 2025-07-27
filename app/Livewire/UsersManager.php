<?php

// namespace App\Livewire;

// use Livewire\Component;

// class UsersManager extends Component
// {
//     public function render()
//     {
//         return view('livewire.users-manager');
//     }
// }
// app/Http/Livewire/UsersManager.php
namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersManager extends Component
{
    public $name, $email;
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }

    public function addUser()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt('password'), // مؤقت
        ]);

        $this->users = User::all();
        $this->reset(['name', 'email']);
    }

    public function render()
    {
        return view('livewire.users-manager');
    }
}
