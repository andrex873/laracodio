<?php

return array(


    'pdf' => array(
        'enabled' => true,
        'binary' => base_path('vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64'),
        'options' => array(
            'margin-top' => 0,
            'margin-left' => 5,
            'disable-javascript' => null
        ),
    ),
    'image' => array(
        'enabled' => false,
        'binary' => base_path('vendor/h4cc/wkhtmltoimage-amd64/bin/wkhtmltoimage-amd64'),
        'options' => array(),
    ),
   
);
