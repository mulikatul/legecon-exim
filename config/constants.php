<?php
return [
     /*
    |--------------------------------------------------------------------------
    | Images Constants
    |--------------------------------------------------------------------------
    */

    'uploads' => [
        'product'                 => 'uploads/product',
        'client_logo'           => 'uploads/client_logo',
        'testimonial'           => 'uploads/testimonial',
    ],
    

        
    /*
    |--------------------------------------------------------------------------
    | Backend Crud Messages
    |--------------------------------------------------------------------------
    */

    'message'       => [
        'save'      => 'Record saved successfully',
        'update'    => 'Record updated successfully',
        'delete'    => 'Record deleted successfully',
        'no_record' => 'Record not found',
    ],
    /*
    |--------------------------------------------------------------------------
    | Email Constants
    |--------------------------------------------------------------------------
    */
 
    'mail' => [
        'mailAuthFrom' => env('AUTH_MAIL_FROM_ADMIN', 'noreply@gmail.com'),
        'noReply' => env('NO_REPLY', 'noreply@gmail.com'),
        'contactUsNotificationToAdmin' => env('CONTACT_US_NOTIFICATION_TO_ADMIN', 'no-reply@gmail.com'),
    ],
];