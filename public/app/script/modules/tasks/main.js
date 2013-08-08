define(function (require) {

    var Backbone        = require('backbone'),
        TaskModel      = require('./model/task.model'),
        TaskView       = require('./view/task.view');

    var task = new TaskModel({ task_id: 2 });

    task.fetch();

    var taskView = new TaskView({
        model: task,
        id: "task-" + task.get('id')
    });
});
