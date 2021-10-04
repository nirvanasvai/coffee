<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeviceInnerWire extends Component
{
	public $device,$downtimes;
    public function render()
    {
//    	dd($this->downtimes);
        return view('livewire.device-inner-wire');
    }
}
