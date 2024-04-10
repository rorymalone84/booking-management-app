<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use WithPagination;

class Users extends Component
{
    public $name, $gender, $city, $phone, $email, $address, $postcode;
    public $isOpen = false;

    public $search = '';

    public function render()
    {

        $headers = [
            ['key' => 'id', 'label' => '#'],
            ['key' => 'name', 'label' => 'Name'],
            ['key' => 'email', 'label' => 'Email'],
            ['key' => 'phone', 'label' => 'Phone'],
        ];

        return view('livewire.users.index', [
            'users' => User::where('name', 'like', '%' . $this->search . '%')->paginate(10),
            'headers' => $headers
        ]);
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
    }
}
