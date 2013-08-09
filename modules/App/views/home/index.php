<div class="container" id="task-list">
    
</div>

<script type="text/template" id="task-template">
<div class="row">
    <div class="col-12">
        <div class="panel">
            <button type="button" class="close task-complete" data-taskid="<%= task.id %>"><i class="icon-ok"></i></button>
            <button type="button" class="close task-view" data-taskid="<%= task.id %>"><i class="icon-share-alt"></i></button>
            <span><%= task.title %></span>
        </div>
    </div>
</div>
</script>
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
