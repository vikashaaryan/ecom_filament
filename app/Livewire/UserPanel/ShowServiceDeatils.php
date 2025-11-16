<?php

namespace App\Livewire\UserPanel;

use App\Models\Service;
use Livewire\Component;

class ShowServiceDeatils extends Component
{
    public $services;
    public function mount($id)
    {
        $this->services = Service::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.user-panel.show-service-deatils',
            ['services' => $this->services]);
    }
}
