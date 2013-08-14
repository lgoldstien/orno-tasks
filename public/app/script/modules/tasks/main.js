define(function (require) {

    var Backbone        = require('backbone'),
        TasksModel      = require('./model/tasks.model'),
        TasksView       = require('./view/tasks.view');

    var tasksModel      = new TasksModel();
    var tasksView       = new TasksView({ model: tasksModel });

});
