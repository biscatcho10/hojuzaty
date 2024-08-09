<?php

namespace Modules\Notifications\Transformers;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Notifications\Entities\Notification;

class NotificationsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        $preferred_locale = request()->server("HTTP_ACCEPT_LANGUAGE") ?? auth()->user()->preferred_locale;
        return [
            'id' => $this->id,
            "title" => $this->data['title'][$preferred_locale],
            "message" => $this->data['message'][$preferred_locale],
            "type" => $this->data['type'],
            "target_type" => $this->data['target_type'],
            "target_id" => $this->data['target_id'],
            "is_read" => Notification::isRead($this->id),
            'creation_time' => Carbon::parse($this->created_at)->format('d-m-Y H:i'),
            'created_at_formatted' => $this->created_at->diffForHumans(),
        ];
    }
}
