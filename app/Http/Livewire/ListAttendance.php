<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Attendance;

class ListAttendance extends Component
{
    public $attendances;

    public function mount(){
        $this->attendances = Attendance::all();
    }

    
    public function render()
    {
        return view('livewire.list-attendance');
    }
}
