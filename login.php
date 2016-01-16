<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Html version | Angulr</title>
        <meta name="description" content="Angularjs, Html5, Music, Landing, 4 in 1 ui kits package" />
        <meta name="keywords" content="AngularJS, angular, bootstrap, admin, dashboard, panel, app, charts, components,flat, responsive, layout, kit, ui, route, web, app, widgets" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="bower_components/animate.css/animate.css" type="text/css" />
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="bower_components/simple-line-icons/css/simple-line-icons.css" type="text/css" />
        <link rel="stylesheet" href="css/font.css" type="text/css" />
        <link rel="stylesheet" href="css/app.css" type="text/css" />

    </head>
    <body>
        <div class="app app-header-fixed  ">


            <div class="container w-xxl w-auto-xs" ng-controller="SignupFormController" ng-init="app.settings.container = false;">

                <div class="m-b-lg">

                    <div class="panel panel-default">
                        <div class="panel-heading font-bold">Login</div>
                        <div class="panel-body">
                            <form role="form" action="index.php" method="post" id="login">
                                <div class="form-group">
                                    <label>Email/Mobile</label>
                                    <input type="text" name="email_mobile" class="form-control" placeholder="Enter Login Email/Mobile" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="loginpassword" class="form-control" placeholder="Password" required>
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center" ng-include="'tpl/blocks/page_footer.html'">
                    <p> <small class="text-muted">Copyright &copy; 2015</small></p>
                </div>
            </div>


        </div>

        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
        <script src="js/ui-load.js"></script>
        <script src="js/ui-jp.config.js"></script>
        <script src="js/ui-jp.js"></script>
        <script src="js/ui-nav.js"></script>
        <script src="js/ui-toggle.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/scripts.js"></script>

    </body>
</html>
