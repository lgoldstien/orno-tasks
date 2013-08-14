define(function (require) {

    var Backbone        = require('backbone'),
        Poller          = require('backbone-poller');

    return Backbone.Model.extend({
        url: "/api/task",
        initialize: function () {
            var poller = Poller.get(this);

            poller.on('success', function(model){
                
            });
            poller.on('complete', function () {
                console.info("poll.complete");
            });
            poller.on('error', function(model){
                console.error("poll.error");
            });

            poller.start();
        }
    });

});
