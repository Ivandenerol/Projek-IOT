<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RijecrResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
        // $date  = date('Y-m-d');
        // $riject = Totalbox::where('tgl_total', $date)->max('ttl_box');
        // return [
        //     'id' => $this->id,
        //     'tgl_total' => $this->$date,
        //     'ttl_box' => $this->$riject
        // ];
    }
}
