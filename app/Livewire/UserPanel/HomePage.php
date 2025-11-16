<?php

namespace App\Livewire\UserPanel;

use App\Models\Service;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('livewire.user-panel.home-page', compact('services'));
    }
}
