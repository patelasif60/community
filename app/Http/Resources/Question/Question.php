<?php

namespace App\Http\Resources\Question;

use Illuminate\Http\Resources\Json\JsonResource;

class Question extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'               => $this->id,
            'title'            => $this->title,
            'content'      => $this->content,
        ];
    }
}
