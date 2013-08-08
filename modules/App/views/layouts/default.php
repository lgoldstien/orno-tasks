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
                <div class="container">
                    <a class="navbar-brand" href="/">Tasks</a>
                    <ul class="nav navbar-nav hidden-sm">
                        <li class="active"><a id="view_content">Current</a></li>
                        <li><a id="view_content">Due Today</a></li>
                        <li><a id="view_content">Complete</a></li>
                    </ul>
                    <ul class="nav navbar-nav hidden-sm pull-right">
                        <li><a id="view_profile">Lawrence</a></li>
                        <li><a id="action_signout"><i class="icon-signout"></i></a></li>
                    </ul>
                </div>
            </div>
        </header>

        <?= $this->region('content') ?>
        
        <div class="container">
            <div class="row">
                <footer class="col-12">
                    <div class="navbar visible-sm">
                        <ul class="nav navbar-nav">
                            <li class="active"><a id="view_content">Current</a></li>
                            <li><a id="view_content">Due Today</a></li>
                            <li><a id="view_content">Complete</a></li>
                            <li><a href="#viewCurrent"><i class="close icon-signout"></i> Signout</a></li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>

        <script data-main="app/main.js" src="app/script/vendor/requirejs/require.js"></script>
    </body>
</html>
