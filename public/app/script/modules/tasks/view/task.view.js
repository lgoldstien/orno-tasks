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

            $('#task-modal').html(this.$el.html());
            
            $('#task-modal').modal('show');

            return this;
        }
    });
});
