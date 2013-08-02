<?php

namespace App\Model;

use Orno\Db\Driver\Pdo;
use Orno\Db\Query;

class TaskModel
{
    protected $driver;
    protected $query;
    protected $task;
    public $result;

    public function __construct(){
        $config = [
            'database' => 'sqlite:/Users/lgold/Projects/orno-tasks/data/db.sq3',
        ];
        $this->driver = new Pdo($config);
        $this->query = new Query($this->driver);
    }

    public function getAll() {
        $this->query->prepare("select * from tasks");
        $this->query->execute();

        $this->result = $this->query->fetch();
    }

    public function get($taskid) {
        $this->query->prepare("select * from tasks where id = '{$taskid}'");
        $this->query->execute();
        $this->result = $this->query->fetch();
    }
}