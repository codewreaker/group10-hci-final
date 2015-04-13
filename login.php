<!-- Login page for Carte D'Aliment -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="assets/css/style.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>

<body>

    <!-- Login Section -->
    <div class="container">
        <div class="row">
            <div id="login" class="col s12 m7 l7 offset-m2 offset-l2">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="assets/images/food1.jpg">
                    </div>
                    <div class="card-content">
                        <p id="title">Carte D'Aliment</p>
                        <a class="waves-effect activator waves-light red lighten-1 btn-large">Login</a>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Login <i class="mdi-navigation-close right"></i></span>
                        <p>Enter Your Username and Password to Login.</p>
                        <div class="row">
                           <!-- Form for logging in -->
                            <form class="col s12 ">
                                <div class="row">
                                    <div class="input-field col s12 ">
                                        <i class="mdi-action-account-circle prefix"></i>
                                        <input placeholder="Placeholder" id="login-username" type="text" class="validate">
                                        <label for="first_name">Username</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="mdi-action-https prefix"></i>
                                        <input placeholder="password" id="login-pword" type="password" class="validate">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 i">
                                        <div class="btn waves-effect waves-light" id="login-btn">Submit
                                            <i class="mdi-content-send right"></i>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--/ Form for Logging in -->
                            <!-- Form for logging in --
                            <form class="col s12 " action="operations/login_fun.php" method="post">
                                <div class="row">
                                    <div class="input-field col s12 ">
                                        <i class="mdi-action-account-circle prefix"></i>
                                        <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="pn">
                                        <label for="first_name">Username</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="mdi-action-https prefix"></i>
                                        <input placeholder="password" id="password" type="password" class="validate" name="pw">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 i">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            --/ Form for Logging in -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Login Section -->

    <!-- Script Files -->
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/js/ajax.js"></script>
    <!--/ Script Files -->
</body>

</html>
