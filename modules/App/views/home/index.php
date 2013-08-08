<div class="container">
    
</div>

<script type="text/template" id="task-template">
<div class="row">
    <div class="col-12">
        <div class="panel">
            <button type="button" class="close" id="task-complete" data-taskid="<%= task.get('id') %>"><i class="icon-ok"></i></button>
            <button type="button" class="close" id="task-view" data-taskid="<%= task.get('id') %>"><i class="icon-share-alt"></i></button>
            <span><%= task.get('title') %></span>
        </div>
    </div>
</div>
</script>

<!-- <div class="row">
    <div class="col-12">
        <div class="panel">
            <button type="button" class="close"><i class="icon-ok"></i></button>
            <button type="button" class="close"><i class="icon-share-alt"></i></button>
            <span>Task Title</span>
        </div>
    </div>
</div> -->
<!-- <div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Task Title</h3>
        <div class="pull-right">
        	<a href="#"
        </div>
    </div>
    <div class="panel-conent">
        <p>Some random task that you will never actually get done!</p>
    </div>
</div> -->