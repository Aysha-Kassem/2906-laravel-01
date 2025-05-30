<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => parent::toArray($request),
            'meta' => [
                'extra_data' => 'Extra Data'
            ],
            'links' => [
                'home' => '/'
            ],
            'other_links' => [
                '' => ''
            ]
        ];
    }
}
