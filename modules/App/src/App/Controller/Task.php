<?php 

namespace App\Controller;

use Orno\Mvc\View\JsonRenderer;
use Orno\Mvc\Controller\RestfulControllerInterface;
use App\Model\TaskModel;


class Task implements RestfulControllerInterface
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
    public function get($id) 
    { 
        $this->taskid = $id;
        $this->taskModel->get($this->taskid);
        $this->view['tasks'] = $this->taskModel->result;
        return $this->view->render();
    }
    public function update($id) { }
    public function delete($id) { }
}
