<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Test;
use Illuminate\Http\Request;

class AnalyticController extends Controller
{
	
	public function index()
	{
		return view('analytic.index');
	}
	
}
