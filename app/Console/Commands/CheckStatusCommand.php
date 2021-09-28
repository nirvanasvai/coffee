<?php

namespace App\Console\Commands;

use App\Jobs\CheckStatusJob;
use App\Models\Device;
use App\Models\Downtime;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class CheckStatusCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:check-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
	public function handle()
	{
		dump('start');
		$response = Http::withOptions([
			'debug' => true,
		])->get('http://127.0.0.1:8000/api/test');
		$objects = $response->object();
		
		foreach ($objects as $object)
		{
//			$totalAmount = $object->milk + $object->coffee + $object->water + $object->cocoa;
//			$check = $totalAmount / 4;
//			if ($check >= 70 ){
//				$object->status = 1;
//			}elseif ($check >=30){
//				$object->status = 2;
//			}else{
//				$object->status = 3;
//			}
			$deviceFindForUpdate = [
				'name'=>$object->name,
				'company_id'=>$object->company_id,
				'code'=>$object->code,
				'cocoa'=>$object->cocoa,
				'coffee'=>$object->coffee,
				'water'=>$object->water,
				'milk'=>$object->milk,
				'status'=>$object->status,
				'city_id'=>$object->city_id,
				'user_id'=>$object->user_id,
				'error_id'=>$object->error_id,
			];
			if ($object->status ==1) {
				Downtime::query()->create([
					'downtime'=>Carbon::now(),
					'device_id'=>$object->id
				]);
			}else {
				Downtime::query()->create([
					'stop_downtime'=>Carbon::now(),
					'device_id'=>$object->id
				]);
			}
			Device::query()->upsert([$deviceFindForUpdate],['code'],['cocoa','coffee','water','milk','status','company_id','error_id']);
			
			dump('end');
		}
	}
 
}
