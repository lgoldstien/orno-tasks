<?php

return [
    /**
     * -------------------------------------------------------------------------
     * Dependencies
     * -------------------------------------------------------------------------
     * Defining your object dependencies here will allow you to use dependency
     * injection within all of your controllers, models etc... making testing
     * much easier. Orno by default will try to resolve any type hinted
     * dependencies automatically but if a definition exists here, performance
     * and resolution speed will be improved greatly.
     * -------------------------------------------------------------------------
     */
    'Orno\Http\Request' => [
    ],
    'Orno\Db\Query' => [
        'arguments' => ['Orno\Db\Driver\Pdo']
    ],
    'Orno\Db\Driver\Pdo' => [
        'arguments' => [
            [
                'database' => 'sqlite:../data/db.sq3'
            ]
        ]
    ]
];
