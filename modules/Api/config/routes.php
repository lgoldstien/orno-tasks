<?php

return [
    '/api/task' => [
        'get' => 'Api\Controller\Task::getAll',
        'post' => 'Api\Controller\Task::create',
        'put' => 'Api\Controller\Task::create',
        'delete' => 'Api\Controller\Task::noMethod'
    ],
    '/api/task/(id)' => [
        'get' => 'Api\Controller\Task::get',
        'post' => 'Api\Controller\Task::update',
        'put' => 'Api\Controller\Task::update',
        'delete' => 'Api\Controller\Task::delete'
    ]
];
