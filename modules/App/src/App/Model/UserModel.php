<?php

namespace App\Model;

use Orno\Db\Driver\Pdo;
use Orno\Db\Query;

class UserModel
{
    protected $driver;
    protected $query;
    protected $task;
    public $result;

    public function __construct(){
        $config = [
            'database' => 'mysql:dbname=tasks;host=localhost;charset=utf8',
            'username' => 'root',
            'password' => 'bILLIe50-'
        ];
        $this->driver = new Pdo($config);
        $this->query = new Query($this->driver);
    }

    public function getAllTasks() {
        $this->query->prepare("select * from tasks");
        $this->query->execute();

        $this->result = $this->query->fetch();
    }

    public function getTask($postid) {
        $this->query->prepare("select * from posts where id = '{$postid}'");
        $this->query->execute();

        $this->result = $this->query->fetch();
        $this->result['date_created'] = date('D, d M Y H:i:s', strtotime($this->result['date_created']));
        $this->result['date_updated'] = date('D, d M Y H:i:s', strtotime($this->result['date_updated']));
        $this->author = new AuthorModel($this->result['author_id']);
        $this->result['author'] = $this->author->result;
    }
}