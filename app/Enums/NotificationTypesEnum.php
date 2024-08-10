<?php

namespace App\Enums;

use Kongulov\Traits\InteractWithEnum;
enum NotificationTypesEnum: string
{
    use InteractWithEnum;
    case NewInquiry = "newInquiry";
    case NewContact = "newContact";



    public static function NotificationUrl($type, $id)
    {
        return match ($type) {
            self::NewInquiry->value => route('dashboard.inquiries.show', $id),
            self::NewContact->value => route('dashboard.contact-us.show', $id),
        };
    }
}
