<?php

namespace App\Model;

use Orno\Db\Query;

class TaskModel
{
    protected $query;
    protected $task;
    public $result;

    public function __construct( Query $query ){
        $this->query = $query;
    }

    public function getAll() {
        $this->query->prepare("select * from tasks")->execute();
        var_dump($this->query);
        $this->result = $this->query->fetch();
    }

    public function get($id) {
        $sql = "select * from tasks where id = :id";
        $this->query->prepare($sql)
             ->bind(":id", $id)
             ->execute();
        $this->result = $this->query->fetch();
    }
}
