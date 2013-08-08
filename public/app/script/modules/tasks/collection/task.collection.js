define(function (require) {

    var Backbone        = require('backbone');

    return Backbone.Collection.extend({
        url: function () {
            return "/api/task";
        }
    });

});
