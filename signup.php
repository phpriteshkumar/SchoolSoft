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
                        <div class="panel-heading font-bold">Register Your School</div>
                        <div class="panel-body">
                            <form role="form" action="" method="post" id="schoolregistration">
                                <div class="form-group">
                                    <label>School Name</label>
                                    <input type="text" name="schoolname" class="form-control" placeholder="Enter School Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" name="schooladdress" placeholder="Enter School Address" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="number" class="form-control" name="schoolphone" placeholder="Enter School Phone Number" required>
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" name="schoolemail" placeholder="Enter School Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Website</label>
                                    <input type="text" class="form-control" name="schoolwebsite" placeholder="Enter School Website Url" required>
                                </div>
                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">School Logo</label>
                                    <div class="col-sm-10">
                                        <input ui-jq="filestyle" name="schoollogo" type="file" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" required>
                                    </div>
                                </div>
                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                <div class="form-group">
                                    <label>Admin Name</label>
                                    <input type="text" name="adminname" class="form-control" placeholder="Enter Admin Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Contact No.</label>
                                    <input type="number" name="phone" class="form-control" placeholder="Enter Admin Contact No." required>
                                    <span class="help-block m-b-none">A OTP will be sent to this number and email id to validate.</span>
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Admin Email" required>
                                </div>
                                <div class="checkbox">
                                    <label class="i-checks">
                                        <input type="checkbox" name="agree" value="1"  required><i></i>Agree the <a href>terms and policy</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Sign up</button>

                            </form>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading font-bold">Validate OTP</div>
                        <div class="panel-body">
                            <form role="form" action="" method="post" id="validateOTP">
                                <div class="form-group">
                                    <label>OTP</label>
                                    <input type="number" maxlength="4" size="4" name="otp" class="form-control" placeholder="Enter a valid otp" required>
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Sign up</button>

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
