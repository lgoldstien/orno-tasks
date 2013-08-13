define(function (require) {

    var Backbone        = require('backbone'),
        Poller          = require('backbone-poller');

    return Backbone.View.extend({

        template: _.template($('#task-list-template').html()),

        initialize: function() {
            this.test();
            this.listenTo(this.model, "change", this.render);

        },
        test: function () {
            console.log(this.model);
        },
        render: function() {
            this.$el.html(this.template({ tasks: this.model.get('tasks') }));
            $('#task-list').html(this.$el.html());

            $('.task-action-complete').click(function () {
                return false;
            });

            $('.task-action-view').click(function () {
                return false;
            });

            $('.task-action-save').click(function () {
                return false;
            });

            return this;
        }
    });
});
