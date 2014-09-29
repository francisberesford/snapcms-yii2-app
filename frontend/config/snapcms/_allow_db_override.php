<?php
return [
    'general/site.title',
    'general/site.tag_line',
    'general/site.homepage' => [
        'rules' => [['integer']],
        'input' => [
            'method' => 'dropDownList',
            //The parameters in the order they appear in the method chosen above
            'params' => [
                [
                    1 => 'Homepage',
                    2 => 'Another Page',
                ],
            ]
        ],
    ],
    'email/email.from_name',
    'email/email.from_address' => [
        'rules' => [['email', 'skipOnEmpty' => false]]
    ],
];
