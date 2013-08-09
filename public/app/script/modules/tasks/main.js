define(function (require) {

    var Backbone        = require('backbone'),
        TaskModel       = require('./model/task.model'),
        TaskView        = require('./view/task.view'),
        TasksModel      = require('./model/tasks.model'),
        TasksView       = require('./view/tasks.view');
    
    var tasksModel      = new TasksModel();
    var tasksView       = new TasksView({ model: tasksModel });

    // var taskModel = new TaskModel({ task_id: 2 });
    
    // var taskView = new TaskView({
    //     model: taskModel
    // });

    // setInterval(function() {
    //     console.log("fetching the model");
    //     taskModel.fetch();
    //     console.log(taskModel.attributes.task.title);
    // }, 1000);
    // console.log("taskView");
    // console.log(taskView.render());
});
