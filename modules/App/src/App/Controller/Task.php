<?php 

namespace App\Controller;

use Orno\Mvc\View\JsonRenderer;
use Orno\Http\Request;
use Orno\Mvc\Controller\RestfulControllerInterface;
use App\Model\TaskModel;


class Task implements RestfulControllerInterface
{
    protected $view;
    protected $taskid;
    protected $taskModel;

    public function __construct(JsonRenderer $view, TaskModel $task, Request $request)
    {
        $this->view = $view;
        $this->request = $request;
        $this->taskModel = $task;
    }

    // Level 1 restful actions
    public function getAll() 
    {
        $this->taskModel->getAll();
        $this->view['tasks'] = $this->taskModel->result;
        return $this->view->render();
    }
    public function create() {
        $postData = [];
        parse_str($this->request->getContent(), $postData);
        
        $postData['date_due'] = date(
            "Y-m-d H:i:s",
            strtotime($postData['date_due'])
        );
        
        $this->taskModel->create( 
            $postData['title'],
            $postData['content'],
            $postData['date_due'],
            $postData['priority']
        );
        
        $this->view['task'] = $this->taskModel->result;
        $response = $this->view->render();
        $response->setStatusCode(201);
        return $response;
    }
    public function options() { }

    // Level 2 restful actions
    public function get($id) 
    { 
        $this->taskid = $id;
        $this->taskModel->get($this->taskid);
        $this->view['tasks'] = $this->taskModel->result;

        $response = $this->view->render();
        if ( $this->taskModel->result == false ) {
            $response->setStatusCode(404);
        }
        return $response;
    }
    public function update($id) { }
    public function delete($id) { 
        $this->taskid = $id;
        $this->taskModel->get($this->taskid);
        $this->view['tasks'] = $this->taskModel->result;

        $response = $this->view->render();
        return $response;
    }
}
