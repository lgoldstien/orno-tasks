require.config({
	baseUrl: "app/script/vendor/",
	paths: {
		"jquery": "jquery/jquery",
		"underscore": "underscore-amd/underscore",
		"backbone": "backbone-amd/backbone",
        "backbone-poller": "backbone-poller/backbone.poller",
		"bootstrap": "bootstrap/js",
		"less": "less/dist/less-1.4.2",
        "masonry": "masonry/masonry",
        "tasks": "../modules/tasks",
        "jquery-age": "../libs/jquery.age"
	},
    deps: ['jquery'],
    shim: {
        "jquery": {
            exports: "$"
        },
        "jquery-age": {
            deps: ['jquery']
        },
        "underscore": {
            exports: "_"
        },
        "backbone": {
            deps: ['jquery', 'underscore'],
            exports: "Backbone"
        },
        "bootstrap/modal": {
            deps: ['jquery']
        },
        "tasks/main": {
            deps: ['backbone', 'bootstrap/modal', 'less'],
            exports: "tasks"
        }
    }
});

require(['tasks/main']);
