<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestApi extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
//			'id' => $this->id,
			'code' => $this->code,
			'milk' => $this->milk,
			'cocoa' => $this->cocoa,
			'water' => $this->water,
			'coffee' => $this->coffee,
			'error_id' => $this->error_id,
		];
    }
}
