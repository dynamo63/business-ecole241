<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fr">
<!--<![endif]-->

<head>

    <title>Dynape</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Dynape - Responsive HTML Template">
    <meta name="author" content="aresthemes">

    <!-- viewport settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">


    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/social-likes_classic.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">


    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico">


</head>

<body>

    <!-- PRELOADING -->
    <div class="preload">
        <div class="spinner"></div>
    </div>


    <nav class="navbar navbar-custom" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <h2 class="navbar-brand">ecole 241 Business</h2>
            </div>


            <p class="phone"><i class="fa fa-2x fa-phone blue"></i> <a href="<?= site_url('commercial') ?>" class="uppercase">Devenir commercial</a></p>
        </div>
    </nav>


    <!-- TOP -->
    <div id="top" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="caption col-lg-12">
                    <h1>ecole 241 lance <br> sa Business School</h1>
                    <p>Accroître ses connaissances pour mieux vendre <br>
                        “On est jamais trop vieux pour apprendre”
                    </p>
                    <a href="<?= site_url('inscription') ?>" class="button button-big button-dark uppercase">S'inscrire à la formation</a>
                </div>
            </div>
        </div>
    </div>


    <!-- CONTENT 1 -->
    <section id="content1">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8 wow fadeInLeft">
                    <h3 class="uppercase">Duis ac ante consectetu</h3>
                    <h2>Sed viverra augue convallis ligula bibendum, duis ac ante consectetur, condimentum felis eget.</h2>
                    <p>Aliquam ornare, magna id gravida iaculis, sapien velit sodales urna, a pretium est nulla a nibh. Fusce ac aliquet metus. Sed ac rhoncus ante. Sed vehicula, erat sed mollis sagittis, tellus tellus convallis nisl, vel rhoncus arcu nibh at tortor. Pellentesque tellus tortor, vulputate a lacus sed, facilisis fringilla nisl. Cras ac metus viverra, fringilla mi non, gravida quam. Sed dapibus accumsan pellentesque. Praesent non purus a turpis imperdiet consequat. Aliquam erat volutpat. Curabitur non mi vel tortor rhoncus imperdiet. Morbi interdum ultricies nisi. Vivamus et dolor sem. </p>
                    <div class="row">
                        <div class="col-lg-6">

                            <h3><i class="fa fa-2x fa-users"></i> Cras urna quam, congue vitae</h3>
                            <p>Aliquam ornare, magna id gravida iaculis, sapien velit sodales urna, a pretium est nulla a nibh. Fusce ac aliquet metus. Sed ac rhoncus ante. Sed vehicula, sed mollis sagittis, tellus tellus convallis.</p>
                        </div>

                        <div class="col-lg-6">
                            <h3><i class="fa fa-2x fa-plus-circle"></i> Cras urna quam, congue vitae</h3>
                            <p>Aliquam ornare, magna id gravida iaculis, sapien velit sodales urna, a pretium est nulla a nibh. Fusce ac aliquet metus. Sed ac rhoncus ante. Sed vehicula, erat sed mollis sagittis, tellus tellus convallis.</p>
                        </div>
                    </div>
                </div>





                <!-- FORM 2 -->
                <div class="col-lg-4 col-md-4 wow fadeInRight visible-sm visible-xs">
                    <div class="form2">
                        <h2 class="blue">Register for Course</h2>
                        <p class="lead">free 30day trial</p>
                        <div class="register-form-02">
                            <input type="text" name="name" class="name" placeholder="name" />
                            <input type="text" name="surname" class="surname" placeholder="surname" />
                            <input type="text" name="email" class="email" placeholder="email address" />
                            <input type="text" name="phone" class="phone_number" placeholder="phone" />
                            <select name="course" class="course">
                                <option value="" disabled selected="selected">Select your course</option>
                                <option value="Web Design">Web Design</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Network Management">Network Management</option>
                            </select>
                            <div>
                                <div class="pull-left">
                                    <div class="message"></div>
                                </div>
                                <a class="button button-dark button-big uppercase pull-right" href="javascript:;" onclick="register('register-form-02');">sign up</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- visible lg - md -->



            </div>
        </div>
    </section>


    <!-- FEATURES -->
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="row">

                    <div class="col-lg-4 col-md-4  text-center wow fadeInDown" data-wow-delay="0.2s">
                        <i class="fa fa-4x fa-search blue feature"></i>
                        <h4 class="uppercase">vulputate</h4>
                        <p>Fusce ac aliquet metus. Sed ac rhoncus ante. Sed vehicula, erat sed mollis sagittis. Cras ac metus viverra, fringilla mi non.</p>
                        <a class="button button-small button-dark" href="index.html#">Read more</a>
                    </div>

                    <div class="col-lg-4 col-md-4 text-center wow fadeInDown" data-wow-delay="0.4s">
                        <i class="fa fa-4x fa-flask blue feature"></i>
                        <h4 class="uppercase">Curabitur</h4>
                        <p>Fusce ac aliquet metus. Sed ac rhoncus ante. Sed vehicula, erat sed mollis sagittis. Cras ac metus viverra, fringilla mi non.</p>
                        <a class="button button-small button-dark" href="index.html#">Read more</a>
                    </div>

                    <div class="col-lg-4 col-md-4 text-center wow fadeInDown" data-wow-delay="0.6s">
                        <i class="fa fa-4x fa-rocket blue feature"></i>
                        <h4 class="uppercase">Morbi interdum</h4>
                        <p>Fusce ac aliquet metus. Sed ac rhoncus ante. Sed vehicula, erat sed mollis sagittis. Cras ac metus viverra, fringilla mi non.</p>
                        <a class="button button-small button-dark" href="index.html#">Read more</a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- CONTENT 2 -->
    <section id="content2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <h3 class="text-center uppercase wow fadeInDown">Praesent imperdiet a metus in luctus</h3>
                    <h2 class="text-center wow fadeInUp">sapien velit sodales urna a pretium est nulla a nibh.</h2>


                    <div class="row">
                        <div class="col-lg-7 col-md-7 wow fadeInLeft">
                            <div id="video">
                                <iframe src="http://player.vimeo.com/video/89527215?title=0&amp;byline=0&amp;portrait=0&amp;color=4584be" width="800/embed/?moog_width=800" height="450" frameborder="0"></iframe>

                            </div>
                        </div>

                        <div class="col-lg-5 col-md-5">
                            <ul class="list-unstyled lead">
                                <li class="wow fadeInRight" data-wow-delay="0.2s"><i class="fa fa-2x fa-check-square-o"></i> Nunc semper nunc et</li>
                                <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-2x fa-check-square-o"></i> Sed viverra augue convallis ligula</li>
                                <li class="wow fadeInRight" data-wow-delay="0.4s"><i class="fa fa-2x fa-check-square-o"></i> Fusce ac aliquet metus</li>
                                <li class="wow fadeInRight" data-wow-delay="0.5s"><i class="fa fa-2x fa-check-square-o"></i> Cras luctus leo eget</li>
                                <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-2x fa-check-square-o"></i> Sed viverra augue convallis</li>
                                <li class="wow fadeInRight" data-wow-delay="0.7s"><i class="fa fa-2x fa-check-square-o"></i> Fusce ac aliquet metus</li>
                                <li class="wow fadeInRight" data-wow-delay="0.8s"><i class="fa fa-2x fa-check-square-o"></i> Cras luctus leo eget</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- CONTENT 3 -->
    <section id="content3" class="wow fadeInDown">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-3">
                    <h2>Cras sed sapien in risus tempor egestas. Maecenas in elit vitae.</h2>
                </div>

                <div class="col-lg-9 col-md-9">
                    <h3>Class aptent taciti sociosqu ad litora torquent</h3>
                    <p>Aliquam ornare, magna id gravida iaculis, sapien velit sodales urna, a pretium est nulla a nibh. Fusce ac aliquet metus. Sed ac rhoncus ante. Sed vehicula, erat sed mollis sagittis, tellus tellus convallis nisl, vel rhoncus arcu nibh at tortor. Pellentesque tellus tortor, vulputate a lacus sed, facilisis fringilla nisl. Cras ac metus viverra, fringilla mi non, gravida quam. Sed dapibus accumsan pellentesque. Praesent non purus a turpis imperdiet consequat. Aliquam erat volutpat. Curabitur non mi vel tortor rhoncus imperdiet. Morbi interdum ultricies nisi. Vivamus et dolor sem. </p>
                </div>

            </div>
        </div>
    </section>


    <!-- MILESTONE -->
    <div id="milestone" class="wow fadeInDown" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row text-center">

                <div class="col-lg-2 col-md-2 col-xs-12 col-lg-offset-2">
                    <p class="timer" data-to="19" data-speed="10000"></p>
                    <p>courses</p>
                </div>

                <div class="col-lg-2 col-md-2 col-xs-12">
                    <p class="timer" data-to="141" data-speed="10000"></p>
                    <p>lessons</p>
                </div>

                <div class="col-lg-2 col-md-2 col-xs-12">
                    <p class="timer" data-to="22" data-speed="10000"></p>
                    <p>ebooks</p>
                </div>

                <div class="col-lg-2 col-md-2 col-xs-12">
                    <p class="timer" data-to="4536" data-speed="10000"></p>
                    <p>users</p>
                </div>

            </div>
        </div>
    </div>


    <!-- CLIENTS -->
    <div id="clients" class="wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <h3 class="text-center uppercase">as seen on</h3>

                    <img class="img-responsive col-lg-3 col-md-3" src="<?= base_url() ?>assets/img/3do.png" alt="">
                    <img class="img-responsive col-lg-3 col-md-3" src="<?= base_url() ?>assets/img/aj.png" alt="">
                    <img class="img-responsive col-lg-3 col-md-3" src="<?= base_url() ?>assets/img/cc.png" alt="">
                    <img class="img-responsive col-lg-3 col-md-3" src="<?= base_url() ?>assets/img/tf.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="small pull-left">Dynape Responsive Landing Page Template</p>

                    <div class="social-likes pull-right">
                        <div class="facebook" title="Share link on Facebook">Facebook</div>
                        <div class="twitter" data-via="envato_support" title="Share link on Twitter">Twitter</div>
                        <div class="plusone" title="Share link on Google+">Google+</div>
                    </div>

                </div>


            </div>
        </div>
    </footer>

    <script src="<?= base_url() ?>assets/js/jquery-1.11.0.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/wow.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.fitvids.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.countTo.js"></script>
    <script src="<?= base_url() ?>assets/js/social-likes.min.js"></script>
    <script src="<?= base_url() ?>assets/js/retina-1.1.0.min.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>

    <!-- GOOGLE ANALYTICS -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-49575073-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

</body>

</html>