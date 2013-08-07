<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tasks</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    </head>
    <body>
        <header>
            <div class="navbar">
                <a class="navbar-brand" href="/">Tasks</a>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#viewCurrent">Current</a></li>
                    <li><a href="#viewToday">Due Today</a></li>
                    <li><a href="#viewComplete">Complete</a></li>
                </ul>
            </div>
        </header>
        <section>
            <?= $this->region('content') ?>
        </section>

        <script src="script/vendor/jquery/jquery.min.js"></script>
        <script src="script/vendor/underscore/underscore.min.js"></script>
        <script src="script/vendor/backbone/backbone.min.js"></script>
        <script src="script/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="script/app.js"></script>
    </body>
</html>
