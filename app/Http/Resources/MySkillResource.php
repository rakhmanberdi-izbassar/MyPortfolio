<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MySkillResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'photo' => $this->photo,
            'title' => $this->title,
            'description' => $this->description,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
