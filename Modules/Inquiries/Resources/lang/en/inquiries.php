<?php

return [
    'singular' => 'Inquiry',
    'plural' => 'Inquiries',
    'latest' => 'Latest Inquiries',
    'empty' => 'There are no Inquiries yet.',
    'count' => 'Inquiries count',
    'search' => 'Search',
    'select' => 'Select Inquiry',
    'perPage' => 'Inquiries Per Page',
    'filter' => 'Search for Inquiry',
    'actions' => [
        'list' => 'List all',
        'show' => 'Show Inquiry',
        'delete' => 'Delete Inquiry',
        'options' => 'Options',
        'save' => 'Save',
        'filter' => 'Filter',
    ],
    'messages' => [
        'deleted' => 'The Inquiry has been deleted successfully.',
    ],
    'attributes' => [
        'name' => 'Inquiry name',
        'email' => 'Inquiry email',
        'phone' => 'Inquiry phone',
        'message' => 'Message',
        'check_in' => 'Check in',
        'check_out' => 'Check out',
        'days' => 'Days',
        'destination_id' => 'Destination',
        'created_at' => 'Creation Date',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the Inquiries ?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
    ],
    'notifications' => [
        'new' => [
            'subject' => 'New Inquiry',
            'body' => 'There is a new Inquiry from :name in :destination',
        ]
    ]
];
