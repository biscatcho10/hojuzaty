<?php

namespace App\Enums;

use Kongulov\Traits\InteractWithEnum;
enum NotificationTypesEnum: string
{
    use InteractWithEnum;
    case NewInquiry = "newInquiry";



    public static function NotificationUrl($type, $id)
    {
        return match ($type) {
            self::NewInquiry => route('inquiries.show', $id),
        };
    }
}
