<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{
    public $name, $gender, $duration, $child_price, $teen_price, $adult_price, $category_id;
    public $isOpen = false;
    public $search = '';



    public function render()
    {

        $headers = [
            ['key' => 'id', 'label' => '#'],
            ['key' => 'name', 'label' => 'Name'],
            ['key' => 'gender', 'label' => 'For'],
            ['key' => 'duration', 'label' => 'Duration(mins)'],
            ['key' => 'child_price', 'label' => 'Kids(£)'],
            ['key' => 'teen_price', 'label' => 'Teens(£)'],
            ['key' => 'adult_price', 'label' => 'Adults(£)'],

        ];

        return view('livewire.services.index', [
            'services' => Service::where('name', 'like', '%' . $this->search . '%')->paginate(10),
            'headers' => $headers,
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
    }
}
