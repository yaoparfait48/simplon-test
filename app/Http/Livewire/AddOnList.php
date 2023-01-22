<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Attendance;

class AddOnList extends Component
{
    public $name;
    public $last_name;
    public $phone;
    public $email;
    public $success;

    protected $rules = [
        'name' => 'required|string',
        'last_name' => 'required|string',
        'phone' => 'required|string',
        'email' => 'required|email',
    ];

    public function render()
    {
        return view('livewire.add-on-list');
    }

    public function submit() {
        $this->validate();

        Attendance::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'email' => $this->email,
        ]);

        $this->success = true;

    }
}
