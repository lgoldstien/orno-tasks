define(function (require) {

    var Backbone        = require('backbone'),
        Poller          = require('backbone-poller');

    return Backbone.View.extend({

        template: _.template($('#task-template').html()),

        initialize: function() {

            this.listenTo(this.model, "change", this.render);

        },

        render: function() {
            console.log('taskView:render', _.template($('#task-template').html()));

            this.$el.html(this.template({ task: this.model.get('task') }));

            console.log('taskView:render', this.model.get('task'));

            $('#task-modal').html(this.$el.html());
            
            $('#task-action-save').click(function (arguments) {
                console.log('Clicked Task Save');
                console.log(this);
                return false;
            });

            $('#task-modal').modal('show');

            return this;
        }
    });
});
