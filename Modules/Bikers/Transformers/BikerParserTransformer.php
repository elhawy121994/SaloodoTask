<?php

namespace Modules\Bikers\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class BikerParserTransformer extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'name' => $this->name,
            'pick_up_address' => $this->pick_up_address,
            'drop_off_address' => $this->drop_off_address,
            'sender_id' => $this->sender_id,
            'status' => $this->status,
            'details' => $this->details,
            'notes' => $this->notes,
            'created_at' => $this->created_at,
            'last_update' => $this->updated_at,
            'sender' => [
                'id' => $this->sender->id,
                'name' => $this->sender->name,
            ]
        ];
    }
}
