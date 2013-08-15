define(function (require) {

    var Backbone        = require('backbone'),
        Poller          = require('backbone-poller'),
        TaskModel       = require('../model/task.model'),
        TaskView        = require('./task.view');

    return Backbone.View.extend({

        template: _.template($('#task-list-template').html()),

        initialize: function() {
            this.listenTo(this.model, "change", this.render);
        },
        render: function() {
            this.$el.html(this.template({ tasks: this.model.get('tasks') }));
            $('#task-list').html(this.$el.html());

            $('.task-action-complete').click(function (arguments) {
                return false;
            });

            $('.task-action-view').click(function (arguments) {
                console.log('Clicked Task View');
                
                var TaskID    = $(this).data("taskid");

                var taskModel = new TaskModel({ id: TaskID });

                var taskView  = new TaskView({ model: taskModel });

                return false;
            });

            return this;
        }
    });
});
