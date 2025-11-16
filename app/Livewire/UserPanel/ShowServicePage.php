<?php

namespace App\Livewire\UserPanel;

use App\Models\Service;
use Livewire\Component;

class ShowServicePage extends Component
{
    public function render()
    {
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('livewire.user-panel.show-service-page', ['services' => $services]);
    }
}
