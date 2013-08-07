TaskModel = Backbone.Model.extend({
    url: "/api/task",
    defaults: {
        title: "Task",
        content: this.title,
        priority: 5
    }
});

task = new TaskModel({
    title: "Test Task",
    content: "<p>This is a test task and will never see the light of day!</p>",
    priority: 3
});
