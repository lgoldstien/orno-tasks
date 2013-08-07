<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tasks</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet/less" type="text/css" href="app/css/css.less" />
    </head>
    <body>
        <header>
            <div class="navbar navbar-fixed-top">
                <a class="navbar-brand" href="/">Tasks</a>
                <ul class="nav navbar-nav hidden-sm">
                    <li class="active"><a href="#viewCurrent">Current</a></li>
                    <li><a href="#viewToday">Due Today</a></li>
                    <li><a href="#viewComplete">Complete</a></li>
                </ul>
            </div>
        </header>
        <section>
            <?= $this->region('content') ?>
        </section>
        
        <div class="container-fluid">
            <div class="row">
                <footer class="col-12">
                    <div class="navbar visible-sm">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#viewCurrent">Current</a></li>
                            <li><a href="#viewToday">Due Today</a></li>
                            <li><a href="#viewComplete">Complete</a></li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>

        <script data-main="app/main.js" src="app/script/vendor/requirejs/require.js"></script>
    </body>
</html>
