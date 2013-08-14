define(function (require) {

    var Backbone        = require('backbone'),
        Poller          = require('backbone-poller');

    return Backbone.Model.extend({
        urlRoot: "/api/task",
        initialize: function () {
            console.log('task model ', this);
            this.fetch();
        }
    });

});
