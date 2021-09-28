<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    
    protected $guarded;
    
    public function cityRelationship()
	{
		return $this->hasOne(City::class,'id','city_id');
	}
	
	public function errorRelationship()
	{
		return $this->hasOne(ErrorList::class,'id','error_id');
	}
	public function companyRelationship()
	{
		return $this->hasOne(Company::class,'id','company_id');
	}
	
}
