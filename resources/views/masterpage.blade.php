<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="public/css/style.css" />
        <link rel="stylesheet" type="text/css" href="public/css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="public/css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="public/css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="public/css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="public/images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="public/images/ico/favicon.ico">
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="">
                        <img src="public/images/logo.png" style="max-width:200px;height:100px !important" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="#home">Trang Chủ</a></li>
                            <li><a href="#service">Dịch Vụ</a></li>
                            <li><a href="#portfolio">Dự án</a></li>
                            <li><a href="#about">Giới Thiệu</a></li>
                            <li><a href="#partner">Đối tác</a></li>
                            <li><a href="#price">Bảng Giá</a></li>
                            <li><a href="#contact">Liên Hệ</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        <!-- Start home section -->
        <section>
            @yield('index')
        </section>
        <!-- Newsletter section end -->
        <!-- Contact section start -->
        <div id="contact" class="contact">
            <div class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1>Liện hệ</h1>
                        <p></p>
                    </div>
                </div>
                <div class="map-wrapper">
                    <div class="map-canvas" id="map-canvas"><?php echo $address->maps;?></div>
                    <div class="container">
                        <div class="row-fluid">
                            <div class="span5 contact-form centered">
                                <h3>Hãy cho chung tôi biết bạn muốn gì?</h3>
                                <div id="successSend" class="alert alert-success invisible">
                                    <strong>Well done!</strong>Your message has been sent.</div>
                                <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                                <form id="contact-form" action="php/mail.php">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="text" id="name" name="name" placeholder="* Your name..." />
                                            <div class="error left-align" id="err-name">Please enter name.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="email" name="email" id="email" placeholder="* Your email..." />
                                            <div class="error left-align" id="err-email">Please enter valid email adress.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea class="span12" name="comment" id="comment" placeholder="* Comments..."></textarea>
                                            <div class="error left-align" id="err-comment">Please enter your comment.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button id="send-mail" class="message-btn">Send message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="span9 center contact-info">
                        <p>{{$address->address}}</p>
                        <p class="info-mail">{{$address->email}}</p>
                        <p>{{$address->phone}}</p>
                        <div class="title">
                            <h3>Kết nối với chúng tôi qua mạng xã hội</h3>
                        </div>
                    </div>
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a target='_blank' href="{{$address->facebookpage}}">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a target='_blank' href="{{$address->twitterpage}}">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a target='_blank' href="{{$address->youtubepage}}">
                                    <span class="icon-vimeo-circled"></span>
                                </a>
                            </li>                           
                            <li>
                                <a target='_blank' href="{{$address->googlepage}}">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact section edn -->
        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; 2015 design by lovadweb<a href=""></a><a href=""></a></p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="public/js/jquery.js"></script>
        <script type="text/javascript" src="public/js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="public/js/bootstrap.js"></script>
        <script type="text/javascript" src="public/js/modernizr.custom.js"></script>
        <script type="text/javascript" src="public/js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="public/js/jquery.cslider.js"></script>
        <script type="text/javascript" src="public/js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="public/js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="public/js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="public/js/app.js"></script>
    </body>
</html>