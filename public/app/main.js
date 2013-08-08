require.config({
	baseUrl: "app/script/vendor/",
	paths: {
		"jquery": "jquery/jquery",
		"underscore": "underscore-amd/underscore",
		"backbone": "backbone-amd/backbone",
		"bootstrap": "bootstrap/js",
		"less": "less/dist/less-1.4.2",
        "masonry": "masonry/masonry",
        "tasks": "../modules/tasks"
	},
    deps: ['jquery'],
    shim: {
        "jquery": {
            exports: "$"
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
