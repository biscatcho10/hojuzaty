<?php

return [
    'singular' => 'استفسار',
    'plural' => 'استفسارات',
    'latest' => 'أحدث الاستفسارات',
    'empty' => 'لا يوجد استفسارات حتى الآن.',
    'count' => 'عدد الاستفسارات',
    'search' => 'بحث',
    'select' => 'اختر الاستفسار',
    'perPage' => 'استفسارات في الصفحة',
    'filter' => 'ابحث عن استفسار',
    'actions' => [
        'list' => 'عرض الكل',
        'show' => 'عرض الاستفسار',
        'delete' => 'حذف الاستفسار',
        'options' => 'خيارات',
        'save' => 'حفظ',
        'filter' => 'تصفية',
    ],
    'messages' => [
        'deleted' => 'تم حذف الاستفسار بنجاح.',
    ],
    'attributes' => [
        'name' => 'الاسم',
        'email' => 'البريد الالكتروني',
        'phone' => 'رقم الهاتف',
        'message' => 'رسالة',
        'check_in' => 'تاريخ الوصول',
        'check_out' => 'تاريخ المغادرة',
        'days' => 'الأيام',
        'destination_id' => 'الوجهة',
        'created_at' => 'تاريخ الإنشاء',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد أنك تريد حذف الاستفسارات ؟',
            'confirm' => 'حذف',
            'cancel' => 'إلغاء',
        ],
    ],
    'notifications' => [
        'new' => [
            'subject' => 'استفسار جديد',
            'body' => 'هناك استفسار جديد من :name علي :destination'
        ]
    ]
];
