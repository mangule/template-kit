<?php

namespace App\Livewire\Demo1;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.demo1.base')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.demo1.index');
    }
}
