<?php

namespace App\Http\Controllers;

use App\Http\Resources\TestApi;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
	public function index()
	{
		$test = Test::query()->get();
		
		return response([ 'test' => TestApi::collection($test)]);
	}
	
}
