<!DOCTYPE html>
<html>

<head>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="assets/css/style.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>

<body>
    <!-- This is the Navbar --
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Carte D'Aliment</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html"><i class="mdi-action-search"></i></a>
                </li>
                <li><a href="components.html"><i class="mdi-action-view-module"></i></a>
                </li>
                <li><a href="javascript.html"><i class="mdi-navigation-refresh"></i></a>
                </li>
                <li><a href="mobile.html"><i class="mdi-navigation-more-vert"></i></a>
                </li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html"><i class="mdi-action-search"></i></a>
                </li>
                <li><a href="components.html"><i class="mdi-action-view-module"></i></a>
                </li>
                <li><a href="javascript.html"><i class="mdi-navigation-refresh"></i></a>
                </li>
                <li><a href="mobile.html"><i class="mdi-navigation-more-vert"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar Ends Here -->

    <!-- This is the Navbar -->
    <nav>
        <div class="nav-wrapper">
            <a href="#" class=" brand-logo">Carte D'Aliment</a>
            <div class="fixed-action-btn" style="top: 65px; right: 22px;">
                <a href="#" data-activates="mobile-demo" class="button-floating btn-floating btn-large red" id="side-nav-btn"><i class="mdi-navigation-menu"></i></a>
                <ul>
                    <li>
                        <a href="login.php" class="btn-floating btn-large red  darken-2 z-depth-2 tooltipped" data-tooltip="Login as Admin" data-position="left">
                            <i class="large mdi-action-home"></i>
                        </a>
                    </li>
                    <li>
                        <a class="btn-floating btn-large yellow darken-1 z-depth-2 tooltipped" data-tooltip="Categories" data-position="left">
                            <i class="large mdi-action-view-module"></i>
                        </a>
                    </li>
                    <li>
                        <a class="btn-floating btn-large green z-depth-2 tooltipped" data-tooltip="Back" data-position="left">
                            <i class="large mdi-av-fast-rewind"></i>
                        </a>
                    </li>
                    <li>
                        <a class="btn-floating btn-large blue z-depth-2 tooltipped" data-tooltip="Exit" data-position="left">
                            <i class="large mdi-editor-attach-file"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar Ends Here -->



    <!-- Food Cards -->

    <div class="main">

        <!-- Tabs for Food Section -->
        <div class="white z-depth-2">
            <ul class="tabs col s12 ">
                <li class="tab col s3 "><a class="active waves-effect waves-red " href="#test1">Food</a>
                </li>
                <li class="tab col s3"><a class="waves-effect waves-red " href="#test2">Drinks</a>
                </li>
                <li class="tab col s3"><a class="waves-effect waves-red " href="#test3">Snacks</a>
                </li>
            </ul>
        </div>
        <div id="test1" class="col s12">
            <div class="">
                <!-- Food Cards -->
                <div class="row width-80">
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="grey-out hide"><i class="mdi-av-not-interested"></i></div>
                                <img class="activator" src="assets/images/food1.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Bruschettas<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Bruschettas<i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/food2.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Beef Stake<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Beef Stake<i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/food3.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Sphaggerrotti<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Sphaggerrotti<i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/food4.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Samperelli<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Samperelli<i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/food5.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Fod 1 <i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Food 1 <i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/food6.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Crazy Burger<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Food 1 <i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Food Card Ends Here -->
            </div>

        </div>
        <div id="test2" class="col s12">
          <div>
                <!-- Food Cards -->
                <div class="row width-80">
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="grey-out hide"><i class="mdi-av-not-interested"></i></div>
                                <img class="activator" src="assets/images/drink6.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Bruschettas<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Bruschettas<i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/drink1.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Beef Stake<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Beef Stake<i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/drink5.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Sphaggerrotti<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Sphaggerrotti<i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/drink4.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Samperelli<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Samperelli<i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/drink3.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Fod 1 <i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Food 1 <i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/drink2.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Crazy Burger<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Food 1 <i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Food Card Ends Here -->
            </div>
        </div>
        <div id="test3" class="col s12">
                   <div>
                <!-- Food Cards -->
                <div class="row width-80">
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="grey-out hide"><i class="mdi-av-not-interested"></i></div>
                                <img class="activator" src="assets/images/food6.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Bruschettas<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Bruschettas<i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/food1.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Beef Stake<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Beef Stake<i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/food2.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Sphaggerrotti<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-3">Sphaggerrotti<i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/food4.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Samperelli<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Samperelli<i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/food1.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Fod 1 <i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Food 1 <i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/images/food5.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Crazy Burger<i class="mdi-navigation-more-vert right"></i></span>
                                <p><span class="currency">&#162; 35</span>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Food 1 <i class="mdi-navigation-close right"></i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                <a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Food Card Ends Here -->
            </div>
        </div>
        <!--/Tabs for Food Section -->
    </div>







    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>
