<?php 

namespace App\Controller;

use Orno\Mvc\View\JsonRenderer;

class Task
{
    protected $view;
    protected $taskid;

    public function __construct(JsonRenderer $view)
    {
        $this->view = $view;
    }

    public function getAll() {
        $tasks = [
            [
                'title' => 'Do this',
                'content' => 'You need to do this',
                'user' => 1,
                'date_created' => '07/05/2013',
                'date_due' => '07/08/2013'
            ]
        ];
        $this->view->__set('tasks', $tasks);
        $this->view->render();
    }
}
