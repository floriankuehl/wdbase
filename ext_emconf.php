<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'WDBase',
    'description' => 'Base-Extension for the main template. Contains typoscript and a basic template structure.',
    'category' => 'fe',
    'author' => 'Florian Kühl',
    'author_email' => 'support@webdev-siegen.de',
    'author_company' => 'Florian Kühl Webentwicklung',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
