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

    // Level 1 restful actions
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
        $this->view['tasks'] = $tasks;
        return $this->view->render();
    }
    public function create() { }
    public function options() { }

    // Level 2 restful actions
    public function get($taskid) { }
    public function update($taskid) { }
    public function delete($taskid) { }
}
