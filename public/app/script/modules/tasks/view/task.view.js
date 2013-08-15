define(function (require) {

    var Backbone        = require('backbone'),
        Poller          = require('backbone-poller');

    return Backbone.View.extend({

        template: _.template($('#task-template').html()),

        initialize: function() {

            this.listenTo(this.model, "change", this.render);

        },

        render: function() {

            this.$el.html(this.template({ task: this.model.get('task') }));

            $('#task-view-modal').html(this.$el.html());

            $('time').age();
            
            $('#task-action-save').click(function (arguments) {
                console.log('Clicked Task Save');
                console.log(this);
                return false;
            });

            $('#task-view-modal').modal('show');

            return this;
        }
    });
});
