require.config({
	baseUrl: "app/script",
	paths: {
		"jquery": "vendor/jquery/jquery",
		"underscore": "vendor/underscore-amd/underscore",
		"backbone": "vendor/backbone-amd/backbone",
		"bootstrap": "vendor/bootstrap/js",
		"less": "vendor/less/dist/less-1.4.2"
	}
});

require(['jquery', 'less', 'bootstrap/modal'], function () {
	
});