<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;

class DeviceCreateWire extends Component
{
	public $cities,$company,$city_id;
    public function render()
    {
        return view('livewire.device-create-wire');
    }
	
	public function updated()
	{
		$this->company = Company::query()->where('city_id' , $this->city_id)->get();
	}
}
