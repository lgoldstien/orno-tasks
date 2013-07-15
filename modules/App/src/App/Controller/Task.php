<?php 

namespace App\Controller;

use Orno\Mvc\View\JsonRenderer;
use App\Model\TaskModel;

class Task
{
    protected $view;
    protected $taskid;
    protected $taskModel;

    public function __construct(JsonRenderer $view, TaskModel $task)
    {
        $this->view = $view;
        $this->taskModel = $task;
        
    }

    // Level 1 restful actions
    public function getAll() 
    {
        $this->taskModel->getAll();
        $this->view['tasks'] = $this->taskModel->result;
        return $this->view->render();
    }
    public function create() { }
    public function options() { }

    // Level 2 restful actions
    public function get($taskid) 
    { 
        $this->taskid = $taskid;
        $this->taskModel->get($taskid);
        $this->view['tasks'] = $this->taskModel->result;
        // print_r($this->taskModel);
        return $this->view->render();
    }
    public function update($taskid) { }
    public function delete($taskid) { }
}
