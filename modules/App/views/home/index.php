<!-- Div to load a list of tasks into, as defined in the tasks.view.js file -->
<div class="container" id="task-list"></div>
<!-- Modal div for loading a single task into -->
<div class="modal fade" id="task-modal"></div>

<!-- The modal template for a single task -->
<script type="text/template" id="task-template">
<div class="modal-dialog" id="task-modal" data-taskid="<%= task.id =>">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-close"></i></button>
            <h4 class="modal-title"><%= task.title => <small><%= task.date_due =></small></h4>
        </div>
        <div class="modal-body">
            <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="task-action-save">Save changes</button>
        </div>
    </div>
</div>
</script>

<!-- The task list template, accepts an array of tasks and generates an entry for each -->
<script type="text/template" id="task-list-template">
<% _.each(tasks, function (task) { %>
<div class="row">
    <div class="col-12">
        <div class="panel">
            <button type="button" class="close task-complete" data-taskid="<%= task.id %>"><i class="icon-ok"></i></button>
            <button type="button" class="close task-view" data-taskid="<%= task.id %>"><i class="icon-share-alt"></i></button>
            <span><%= task.title %></span>
        </div>
    </div>
</div>
<% }); %>
</script>
