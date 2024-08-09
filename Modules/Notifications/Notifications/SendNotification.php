<?php

namespace Modules\Notifications\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Kutia\Larafirebase\Messages\FirebaseMessage;

class SendNotification extends Notification
{
    use Queueable;

    protected $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }


    public function getPreferredLocale(): string
    {
        return $this->data['recipient_type']::find($this->data['recipient_id'])->preferred_locale;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        if (is_null($this->data['fcmTokens'])) {
            return ['database'];
        }
        return ['database', 'firebase'];
    }



    public function toFirebase($notifiable)
    {
        return (new FirebaseMessage)
            ->fromArray([
                'title' => $this->data['title'][$this->getPreferredLocale()],
                'body' => $this->data['message'][$this->getPreferredLocale()],
                'image' => $this->data['sender_image'],
                'badge' => $this->data['notification_count'],
                'sound' => "default",
            ])
            ->withPriority('high')
            ->withAdditionalData(array_slice($this->data, 4))
            ->asNotification($this->data['fcmTokens']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return $this->data;
    }
}
