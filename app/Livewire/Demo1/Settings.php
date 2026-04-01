<?php

namespace App\Livewire\Demo1;

use Livewire\Attributes\Layout;
use Livewire\Component;
#[Layout('layouts.demo1.base')]
class Settings extends Component
{
    public function render()
    {
        return view('livewire.demo1.settings');
    }
}
