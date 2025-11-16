<?php

namespace App\Livewire\UserPanel;

use App\Models\Member;
use Livewire\Component;

class ShowTeamPage extends Component
{
    public function render()
    {
        $teamMembers = Member::where('status', 1)->get();
        return view('livewire.user-panel.show-team-page', ['teamMembers' => $teamMembers]);
    }
}
