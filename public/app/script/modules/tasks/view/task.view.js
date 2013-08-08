define(function (require) {

    var Backbone        = require('backbone');

    return Backbone.View.extend({

        template: _.template($('#task-template').html()),

        events: {
            "click .icon":          "open",
            "click .button.edit":   "openEditDialog",
            "click .button.delete": "destroy"
        },

        initialize: function() {
            this.listenTo(this.model, "change", this.render);
        },

        render: function() {
            this.$el.html(this.template(this.model));
            return this;
        }
    });

});