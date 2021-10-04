<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use App\Models\Device;
use App\Models\Downtime;
use App\Models\ErrorList;
use App\Services\Device\DeviceService;
use Astatroth\LaravelTimer\Timer;
use DateTime;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
	{
		$cities = City::query()->has('deviceRelationship')->with('deviceRelationship')->get();
		
		return view('device.index',compact('cities'));
	}
	
	
	
	public function innerCity($slug)
	{
		$city = City::query()->where('slug',$slug)->firstOrFail();
//		$companies = Company::query()->where('city_id',$city->id)->get();
//		$device = Device::query()->where('company_id',$companies[0]->id)->get();

//		dd($device);
		
		return view('device.inner',compact('city',));
	}
	
	public function innerDevice($id)
	{
		$device = Device::query()->where('id',$id)->firstOrFail();
		$downtimes = Downtime::query()->orderBy('id','desc')->where('device_id' , $device->id)->first();
		
		
		return view('device.inner_device',compact('device','downtimes'));
	}
	public function create()
	{
		$cities = City::query()->get();
		$company = Company::query()->get();
		if (auth()->user()->role !=1)
			return redirect('device')->with('warning','У вас нет прав в данный раздел!');
			return view('device.create',compact('cities','company'));
		
	}
	
	public function store(Request $request,DeviceService $deviceService)
	{
		$deviceService->getCreateDevice($request);
		
		return redirect('device')->with('success','Успешно Создан!');
	}
	
	public function edit($id)
	{
		$device = Device::query()->findOrFail($id);
		$cities = City::query()->get();
		$errorLists = ErrorList::query()->get();
		$company = Company::query()->get();
		return view('device.edit',compact('device','cities','company','errorLists'));
	}
	public function update(Request $request,$id)
	{
		$device = Device::query()->findOrFail($id);
//		$device->name = $request->name;
		$device->filial_name = $request->filial_name;
		$device->company_id = $request->company_id;
		$device->code = $request->code;
//		$device->cocoa = $request->cocoa;
//		$device->coffee = $request->coffee;
//		$device->water = $request->water;
//		$device->milk = $request->milk;
		$device->status = $request->status;
		$device->city_id = $request->city_id;
//		$device->error_id = $request->error_id;
		$device->user_id = auth()->user()->id;
		$device->update();
		
		return redirect('device')->with('success','Успешно Обновлено!');
	}
	
	public function destroy($id)
	{
		$device = Device::query()->find($id);
		
		$device->delete();
		
		return back()->with('success','Успешно Удалено!');
	}
}
