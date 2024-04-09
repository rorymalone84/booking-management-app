<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $users, $name, $gender, $city, $phone, $email, $password;
    public $isOpen = false;

    public function render()
    {
        $this->users = User::all();
        return view('livewire.users.index');
    }

    public function openModal()
    {
        $this->resetInputFields();
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->gender = '';
        $this->city = '';
        $this->phone = '';
        $this->email = '';
        $this->password = '';
    }
}