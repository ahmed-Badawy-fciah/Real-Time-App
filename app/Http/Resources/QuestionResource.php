<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'title' => $this->title,
            'created_at' => $this->created_at,
            'path' => $this->path,
            'slug' => $this->slug,
            'body' => $this->body,
            'user' => $this->user->name,
            'user_id' => $this->user->id
        ];
    }
}
