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
        $this->result = $this->query->fetchAll();
    }

    public function create($title, $content, $date_due, $priority) {
        $sql = "insert into tasks ( title, content, date_due, priority ) values ( :title, :content, :date_due, :priority )";
        $this->query->prepare($sql);
        $this->query->bind(":title", $title)
             ->bind(":content", $content)
             ->bind(":date_due", $date_due)
             ->bind(":priority", $priority);
        $this->query->execute();

        var_dump($this->query);
    }

    public function get($id) {
        $sql = "select * from tasks where id = :id";
        $this->query->prepare($sql)
             ->bind(":id", $id)
             ->execute();
        $this->result = $this->query->fetch();
    }

    public function delete($id) { 
        $sql = "delete from tasks where id = :id";
        $this->query->prepare($sql)
             ->bind(":id", $id)
             ->execute();
        $this->result = $this->query->fetch();
    }
}
