<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    
    protected $guarded;
    
    public function deviceRelationship()
	{
		return $this->hasOne(Device::class,'company_id','id');
	}
	public function cityCompany()
	{
		return $this->hasOne(City::class,'id','city_id');
	}
}
