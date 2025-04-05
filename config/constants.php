<?php
return [
     /*
    |--------------------------------------------------------------------------
    | Images Constants
    |--------------------------------------------------------------------------
    */

    'uploads' => [
        'blogs'                 => 'uploads/blogs',
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
    ],
];