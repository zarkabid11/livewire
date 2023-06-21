<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $name = 'Testing';
    public $check = false;
    public $greetings = 'hello';
    public function render()
    {
//        return view('livewire.test', [
//            'name' => 'Testing'
//        ]);
        return view('livewire.test');
    }
}
