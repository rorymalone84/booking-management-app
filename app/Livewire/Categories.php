<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $name;
    public $isOpen = false;

    public $search = '';

    public function render()
    {

        $headers = [
            ['key' => 'id', 'label' => '#'],
            ['key' => 'name', 'label' => 'Name'],
        ];

        return view('livewire.users.index', [
            'categories' => Category::where('name', 'like', '%' . $this->search . '%')->paginate(10),
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
    }
}
