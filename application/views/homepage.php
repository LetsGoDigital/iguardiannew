<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- START @HEAD -->
<head>
    <!-- START @META SECTION -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.">
    <meta name="keywords" content="">
    <meta name="author" content="iGuardian">
    <title>iGuardian</title>
    <!--/ END META SECTION -->

    <!-- START @FAVICONS -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/global/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/global/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/global/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/global/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/global/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/global/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/global/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/global/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/global/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/global/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/global/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/global/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/global/img/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/global/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!--/ END FAVICONS -->

    <!-- START @GLOBAL MANDATORY STYLES -->
    <link href="<?php echo base_url('assets/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!--/ END GLOBAL MANDATORY STYLES -->

    <!-- START @PAGE LEVEL STYLES -->
    <link href="<?php echo base_url('assets/global/plugins/bower_components/fontawesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/global/plugins/bower_components/simple-line-icons/css/simple-line-icons.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/global/plugins/bower_components/animate.css/animate.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/global/plugins/bower_components/spinkit/css/spinners/9-cube-grid.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/commercial/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css'); ?>" rel="stylesheet">

    <!-- REVOLUTION STYLE SHEETS -->
    <link href="<?php echo base_url('assets/commercial/plugins/slider-revolution/revolution/css/settings.css'); ?>" rel="stylesheet">
    <!-- REVOLUTION LAYERS STYLES -->
    <link href="<?php echo base_url('assets/commercial/plugins/slider-revolution/revolution/css/layers.css'); ?>" rel="stylesheet">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link href="<?php echo base_url('assets/commercial/plugins/slider-revolution/revolution/css/navigation.css'); ?>" rel="stylesheet">
    <!--/ END PAGE LEVEL STYLES -->

    <!-- START @THEME STYLES -->
    <link href="<?php echo base_url('front-assets/css/reset.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('front-assets/css/section.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('front-assets/css/component.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('front-assets/css/plugin.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('front-assets/css/theme.css'); ?>" rel="stylesheet" id="theme">
    <link href="<?php echo base_url('front-assets/css/custom.css'); ?>" rel="stylesheet">
    <!--/ END THEME STYLES -->

    <!-- START @IE SUPPORT -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--/ END IE SUPPORT -->
</head>
<!--/ END HEAD -->

<!-- START @BODY -->
<body>

<!-- START @WRAPPER -->
<section id="wrapper" >
   
   <nav class="navbar navbar-light navbar-fixed-top bg-faded">
      <div class="container" style="width: 100%; min-height:150px; background-color: white">
        <div class="navbar-header" style="background-color: white">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="../../assets/global/img/frontend/logo_small.png" style="width: 219px; height: 150px; margin-top: -17px" alt="iGuardian Logo"/></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <!--<ul class="nav navbar-nav">
            <li class=""><a href="#">Home</a></li>
            <li class="About">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">iGuardian Community</a></li>
                
              </ul>
            </li>
            <li><a href="#contact">Trial</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Price Plans <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Switch</a></li>
                <li><a href="#">Refer</a></li>
                
              </ul>
              <li><a href="#contact">Contact Us</a></li>
            </li>
          </ul>-->
          <ul class="nav navbar-nav navbar-right" style="font-size: 18px; margin-right: 20px">
           <li class=""><a href="#">Home</a></li>
            <li class="About">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
              <ul class="dropdown-menu" style="color: orange">
                <li><a href="#">iGuardian Community</a></li>
                
              </ul>
            </li>
            <li><a href="#contact">Trial</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Price Plans <span class="caret"></span></a>
              <ul class="dropdown-menu" style="color: orange">
                <li><a href="#">Switch</a></li>
                <li><a href="#">Refer</a></li>
                
              </ul>
              <li><a href="#contact">Contact Us</a></li>
            </li>
            <li class=""><a href="<?php echo base_url('user/login'); ?>">Login<span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--[if lt IE 9]>
    <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- START @PRELOADER -->
   <div id="loader-wrapper">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!--/ END PRELOADER -->

    <!-- START @BANNER -->
    
    
    
    <section id="banner">
		
        <div id="rev_slider_66_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="web-product-dark62" style="background-color:transparent;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.0.7 fullscreen mode -->
            <div id="rev_slider_66_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-227" data-transition="slidevertical" data-slotamount="1"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="../../assets/global/img/frontend/web_bg.png"  alt="..."  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-227-layer-1"
                             data-x="['right','right','center','center']" data-hoffset="['-140','-453','70','60']"
                             data-y="['middle','middle','middle','bottom']" data-voffset="['50','50','211','0']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;s:1500;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                             data-start="2500"
                             data-responsive_offset="on"


                             style="z-index: 5;"><img src="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/frontend-themes/one-page/app-showcase/banner/2.png" alt="..." width="1000" height="600" data-ww="['1000px','1000px','500px','350px']" data-hh="['600px','600px','300px','210px']" data-no-retina>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-227-layer-2"
                             data-x="['left','left','center','center']" data-hoffset="['713','865','70','60']"
                             data-y="['top','top','top','bottom']" data-voffset="['266','216','580','38']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-start="3350"
                             data-responsive_offset="on"


                             style="z-index: 6;"><img src="../../front-assets/img/desktop.png" alt="..." width="653" height="408" data-ww="['653px','653px','330px','230px']" data-hh="['408px','408px','206px','144px']" data-no-retina>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-227-layer-3"
                             data-x="['left','left','center','center']" data-hoffset="['480','633','-110','-60']"
                             data-y="['top','top','top','bottom']" data-voffset="['253','203','590','-5']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;s:1500;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                             data-start="2750"
                             data-responsive_offset="on"


                             style="z-index: 7;"><img src="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/frontend-themes/one-page/app-showcase/banner/4.png" alt="..." width="430" height="540" data-ww="['430px','430px','200px','170px']" data-hh="['540px','540px','251px','213px']" data-no-retina>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-227-layer-4"
                             data-x="['left','left','left','center']" data-hoffset="['550','703','212','-60']"
                             data-y="['top','top','top','bottom']" data-voffset="['341','291','632','25']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-start="3700"
                             data-responsive_offset="on"


                             style="z-index: 8;"><img src="http://img.djavaui.com/?create=290x374,ff7700?f=ffffff" alt="..." width="290" height="374" data-ww="['290px','290px','135px','115px']" data-hh="['374px','374px','174px','148px']" data-no-retina>
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-227-layer-5"
                             data-x="['left','left','left','left']" data-hoffset="['427','553','127','58']"
                             data-y="['top','top','top','top']" data-voffset="['348','297','622','554']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;s:1500;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                             data-start="3000"
                             data-responsive_offset="on"


                             style="z-index: 9;"><img src="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/frontend-themes/one-page/app-showcase/banner/6.png" alt="..." width="260" height="450" data-ww="['260px','260px','130px','100px']" data-hh="['450px','450px','225px','173px']" data-no-retina>
                        </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-227-layer-6"
                             data-x="['left','left','left','left']" data-hoffset="['471','598','150','75']"
                             data-y="['top','top','top','top']" data-voffset="['431','379','663','585']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-start="3950"
                             data-responsive_offset="on"


                             style="z-index: 10;"><img src="http://img.djavaui.com/?create=170x286,ff7700?f=ffffff" alt="..." width="170" height="286" data-ww="['170px','170px','85px','66px']" data-hh="['286px','286px','143px','111px']" data-no-retina>
                        </div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption WebProduct-Title-Light tp-resizeme"
                             id="slide-227-layer-7"
                             data-x="['left','left','left','left']" data-hoffset="['-30','30','200','80']"
                             data-y="['middle','middle','top','top']" data-voffset="['-80','-80','137','130']"
                             data-fontsize="['90','90','75','75']"
                             data-lineheight="['90','90','75','70']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                             data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                             data-start="1000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


							 style="z-index: 11; white-space: nowrap;">Welcome to<br><span style="color: #F37D0B">iGuardian</span>
                        </div>

                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                             id="slide-227-layer-10"
                             data-x="['left','left','left','left']" data-hoffset="['-30','30','200','80']"
                             data-y="['middle','middle','top','top']" data-voffset="['44','44','294','277']"
                             data-fontsize="['15','15','15','13']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                             data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                             data-start="1250"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 12; white-space: nowrap;letter-spacing:2px;font-weight:500;">CLEAN / ELEGANT / EASY TO USE
                        </div>

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                             id="slide-227-layer-9"
                             data-x="['left','left','left','left']" data-hoffset="['-30','30','200','80']"
                             data-y="['middle','middle','top','top']" data-voffset="['129','127','345','316']"
                             data-fontsize="['16','16','16','14']"
                             data-lineheight="['24','24','24','22']"
                             data-width="['448','356','334','277']"
                             data-height="['none','none','76','68']"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"

                             data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                             data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                             data-start="1500"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 13; min-width: 448px; max-width: 448px; white-space: normal;">iGuardian is an online platform connecting Nurseries & Parents

allowing them to interact in a safe and secure environment<br/>
                            You can be a part of it now!
                        </div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption WebProduct-Button rev-btn "
                             id="slide-227-layer-8"
                             data-x="['left','left','left','left']" data-hoffset="['-30','30','200','80']"
                             data-y="['middle','middle','top','top']" data-voffset="['268','268','456','440']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;"
                             data-style_hover="c:rgba(51, 51, 51, 1.00);bg:rgba(255, 255, 255, 1.00);"

                             data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                             data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                             data-start="1750"
                             data-splitin="none"
                             data-splitout="none"
                             data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-228","delay":""}]'
                             data-responsive_offset="on"
                             data-responsive="off"

                             style="z-index: 14; white-space: nowrap;letter-spacing:1px; background-color: orange"><a href="#features" class="page-scroll">GET STARTED TODAY</a>
                        </div>
                    </li>
                </ul>
                
        </div><!-- END REVOLUTION SLIDER -->
    </section> <!-- /#banner -->
    <!--/ END BANNER -->

    <!-- START @GET IT -->
    <section id="get-it">
        <div class="container">
            <div class="section-header wow zoomIn">
                <h1 class="text-title text-center text-thin">Get It For FREE</h1>
                <p class="text-subtitle text-center text-thin">Choose your native platform and download the app FREE!</p>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="list-inline">
                        <li class="wow slideInLeft">
                            <a href="https://play.google.com/store/search?q=axircle%20studio&hl=en" target="_blank">
                                <img src="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/media/brand/google-play/1.png" alt="..."/>
                            </a>
                        </li>
                        <li class="wow slideInRight">
                            <a href="javascript:void(0);">
                                <img src="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/media/brand/ios-app-store/1.png" alt="..."/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> <!-- /#get-it -->
    <!--/ END GET IT -->

    <!-- START @NEW FEATURE -->
    <section id="new-feature">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow slideInUp">
                    <h1 class="new-feature-title">Live Email Available <span class="label label-success">NEW</span></h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <ul class="list-inline new-feature-icon">
                        <li>
                            <h3>Free Download On</h3>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="fa fa-android"></i>
                                <span>Android</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="fa fa-apple"></i>
                                <span>iOS</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 wow slideInRight">
                    <div class="new-feature-image">
                        <img src="http://img.djavaui.com/?create=460x345,81B71A?f=ffffff" alt="..." class="img-responsive"/>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /#new-feature -->
    <!--/ END NEW FEATURE -->

    <!-- START @FEATURES --><!-- /#features -->
    <section id="features" style="padding-top: 150px">
        <div class="container">
            <div class="section-header section-border wow zoomIn">
                <h1 class="text-title text-center text-thin">iGuardian Key Features</h1>
            </div>
            <div class="row hidden-sm hidden-xs">
                <div class="col-md-4 feature-left">
                    <div class="feature-item media wow slideInLeft">
                        <div class="media-body">
                            <h4 class="media-heading">Online Registration</h4>
                            A front-end toolkit for creating websites. It is a collection of CSS, HTML and other interface components, as well as optional Javascript extensions.
                        </div>
                        <div class="media-right">
                            <i class="icon-wrench icons feature-icon"></i>
                        </div>
                    </div>
                    <div class="feature-item media wow slideInLeft">
                        <div class="media-body">
                            <h4 class="media-heading">EYFS, COEL &amp; Monastery frameworks</h4>
                            Easy to use and re-developed because iGuardian developed using SASS & Compass, there are variables, mixins, operations and functions of CSS.
                        </div>
                        <div class="media-right">
                            <i class="icon-diamond icons feature-icon"></i>
                        </div>
                    </div>
                    <div class="feature-item media wow slideInLeft">
                        <div class="media-body">
                            <h4 class="media-heading">Complete and upload Ofsted reports</h4>
                            The goal of Retina displays is to make the display of text and images extremely crisp, so pixels are not visible to the naked eye. So retina for your amazing website.
                        </div>
                        <div class="media-right">
                            <i class="icon-emoticon-smile icons feature-icon"></i>
                        </div>
                    </div>
                    <div class="feature-item media wow slideInLeft">
                        <div class="media-body">
                            <h4 class="media-heading">Complete risk assessments</h4>
                            Has a fully responsive layout. It fits perfectly on various displays and resolutions from regular desktop screens to tablets and mobile devices.
                        </div>
                        <div class="media-right">
                            <i class="icon-screen-desktop icons feature-icon"></i>
                        </div>
                    </div>
                    <div class="feature-item media wow slideInLeft">
                        <div class="media-body">
                            <h4 class="media-heading">Track and monitor child progress</h4>
                            All design code has been tested valid HTML5 and CSS3 code, thus later providing a powerful quality code for your website.
                        </div>
                        <div class="media-right">
                            <i class="icon-check icons feature-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow bounceIn">
                    <div class="feature-device">
                        <img src="http://img.djavaui.com/?create=300x600,81B71A?f=ffffff" alt="..."/>
                    </div>
                </div>
                <div class="col-md-4 feature-right wow slideInRight">
                    <div class="feature-item media">
                        <div class="media-left">
                            <i class="icon-layers icons feature-icon"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Record daily diaries</h4>
                            All versions all within bundle, available 8 versions Static HTML, AngularJS and More. All packages that will help you in your awesome project.
                        </div>
                    </div>
                    <div class="feature-item media wow slideInRight">
                        <div class="media-left">
                            <i class="icon-volume-2 icons feature-icon"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Graduation packs</h4>
                            Today websites are full of events (new mail, new chat-message, content update etc.). Often it is not enough to indicate this events only visually to get user attention.
                        </div>
                    </div>
                    <div class="feature-item media wow slideInRight">
                        <div class="media-left">
                            <i class="icon-chemistry icons feature-icon"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Action plans</h4>
                            Includes custom plugins, forms, validations, datatables, notifications, maps and much more plugins powered by JQuery and the best star on Github.
                        </div>
                    </div>
                    <div class="feature-item media wow slideInRight">
                        <div class="media-left">
                            <i class="icon-rocket icons feature-icon"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Staff performance levels</h4>
                            Search engines will easily index any page of your content website because the theme uses clean, semantic and valid HTML, CSS, and Javascript code.
                        </div>
                    </div>
                    <div class="feature-item media wow slideInRight">
                        <div class="media-left">
                            <i class="icon-cup icons feature-icon"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Safeguarding &amp; GDPR compliant</h4>
                            Documentation summarized well and clearly. Documentation about base style, javascript plugins, license resource, color schemes and many more.
                        </div>
                    </div>
                </div>
            </div>

            <!--Visible on tablet, phone-->
            <div class="row hidden-md hidden-lg">
                <div class="col-md-4 feature-left">
                    <div class="feature-item media">
                        <div class="media-left">
                            <i class="icon-layers icons feature-icon"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">AWS level security</h4>
                            A front-end toolkit for creating websites. It is a collection of CSS, HTML and other interface components, as well as optional Javascript extensions.
                        </div>
                    </div>
                    <div class="feature-item media">
                        <div class="media-left">
                            <i class="icon-wrench icons feature-icon"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Customiseable dashboard</h4>
                            Easy to use and re-developed because it's developed using SASS & Compass, there are variables, mixins, operations and functions of CSS.
                        </div>
                    </div>
                    <div class="feature-item media">
                        <div class="media-left">
                            <i class="icon-screen-desktop icons feature-icon"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Upload and send photos and videos</h4>
                            The goal of Retina displays is to make the display of text and images extremely crisp, so pixels are not visible to the naked eye. So retina for your amazing website.
                        </div>
                    </div>
                    <div class="feature-item media">
                        <div class="media-left">
                            <i class="icon-screen-desktop icons feature-icon"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Instant notifications</h4>
                            Has a fully responsive layout. It fits perfectly on various displays and resolutions from regular desktop screens to tablets and mobile devices.
                        </div>
                    </div>
                    <div class="feature-item media">
                        <div class="media-left">
                            <i class="icon-check icons feature-icon"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Valid HTML5 & CSS3</h4>
                            All design code has been tested valid HTML5 and CSS3 code, thus later providing a powerful quality code for your website.
                        </div>
                    </div>
                    <div class="feature-item media">
                        <div class="media-left">
                            <i class="icon-volume-2 icons feature-icon"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Instant Messaging</h4>
                            Today websites are full of events (new mail, new chat-message, content update etc.). Often it is not enough to indicate this events only visually to get user attention.
                        </div>
                    </div>
                    <div class="feature-item media">
                        <div class="media-left">
                            <i class="icon-chemistry icons feature-icon"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Enable / Disable access</h4>
                            Includes custom plugins, forms, validations, datatables, notifications, maps and much more plugins powered by JQuery and the best star on Github.
                        </div>
                    </div>
                    <div class="feature-item media">
                        <div class="media-left">
                            <i class="icon-rocket icons feature-icon"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Accounting</h4>
                            Search engines will easily index any page of your content website because the theme uses clean, semantic and valid HTML, CSS, and Javascript code.
                        </div>
                    </div>
                    <div class="feature-item media">
                        <div class="media-left">
                            <i class="icon-cup icons feature-icon"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Create and send invoices</h4>
                            Documentation summarized well and clearly. Documentation about base style, javascript plugins, license resource, color schemes and many more.
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--/ END FEATURES -->

    <!-- START @APP SCREENSHOTS -->
    <section id="app-screenshots" class="hidden-sm hidden-xs">
        <div class="container">
            <div class="section-header section-border wow zoomIn">
                <h1 class="text-title text-center text-thin">iGuardian App Screenshots</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="cbp-l-slider-title-block">
                        <div>Screenshot List</div>
                    </div>

                    <div id="js-grid-slider-projects" class="cbp">
                        <div class="cbp-item app-screenshot-list">
                            <div class="row">
                                <div class="col-md-4 wow slideInLeft">
                                    <img src="http://img.djavaui.com/?create=300x600,81B71A?f=ffffff" alt="..."/>
                                </div>
                                <div class="col-md-4 wow slideInUp">
                                    <img src="http://img.djavaui.com/?create=300x600,81B71A?f=ffffff" alt="..."/>
                                </div>
                                <div class="col-md-4 wow slideInRight">
                                    <img src="http://img.djavaui.com/?create=300x600,81B71A?f=ffffff" alt="..."/>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item app-screenshot-list">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="http://img.djavaui.com/?create=900x600,81B71A?f=ffffff" alt="..."/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /#app-screenshots -->
    <!--/ END APP SCREENSHOTS -->

    <!-- START @PRICING TABLE -->
    <section id="pricing-table">
        <div class="container">
            <div class="section-header section-border wow zoomIn">
                <h1 class="text-title text-center text-thin">Price Plans</h1>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 wow slideInLeft">
                    <div class="pricing-list">
                        <div class="pricing-header">
                            <h3>Starter</h3>
                            <div class="pricing-money">
                                <b>£149</b>
                                <span>per month</span>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>Parent and Setting Access</li>
                                <li>Ability to Upload Pictures</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-success">Trial It</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow slideInUp">
                    <div class="pricing-list selected">
                        <div class="ribbon-wrapper">
                            <div class="ribbon" style="color: #ff7700">Popular</div>
                        </div>
                        <div class="pricing-header">
                            <h3>Development</h3>
                            <div class="pricing-money">
                                <b>£229</b>
                                <span>per month</span>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>Parent and Setting Access</li>
                                <li>Ability to Upload Pictures</li>
                                <li>Invoicing Management</li>
                                <li>Accounting Management</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-success">Trial It</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow slideInRight">
                    <div class="pricing-list">
                        <div class="pricing-header">
                            <h3>Advanced</h3>
                            <div class="pricing-money">
                                <b>£300</b>
                                <span>per month</span>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>Parent and Setting Access</li>
                                <li>Ability to Upload Pictures</li>
                                <li>Invoicing Management</li>
                                <li>Accounting Management</li>
                                <li>Ability to Upload Video</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-success">Trial It</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /#pricing-table -->
    <!--/ END PRICING TABLE -->

    <!-- START @TEAM MEMBERS -->
    <section id="team-members">
        <div class="container">
            <div class="section-header section-border wow zoomIn">
                <h1 class="text-title text-center text-thin">Team Members</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="js-grid-slider-team" class="cbp cbp-slider-edge">
                        <div class="cbp-item wow bounceIn">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="http://img.djavaui.com/?create=280x280,81B71A?f=ffffff" alt="...">
                                </div>
                            </div>
                            <div class="cbp-l-grid-slider-team-wrap">
                                <div class="cbp-l-grid-slider-team-name">Michael Shaw</div>
                                <div class="cbp-l-grid-slider-team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="cbp-l-grid-slider-team-position">CEO, Director General</div>
                            <div class="cbp-l-grid-slider-team-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla nemo ad quibusdam consequuntur sapiente officia natus reprehenderit, doloribus in dolores!
                            </div>
                        </div>
                        <div class="cbp-item wow bounceIn">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="http://img.djavaui.com/?create=280x280,81B71A?f=ffffff" alt="...">
                                </div>
                            </div>
                            <div class="cbp-l-grid-slider-team-wrap">
                                <div class="cbp-l-grid-slider-team-name">Kathy Kim</div>
                                <div class="cbp-l-grid-slider-team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="cbp-l-grid-slider-team-position">Manager</div>
                            <div class="cbp-l-grid-slider-team-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla nemo ad quibusdam consequuntur sapiente officia natus reprehenderit, doloribus in dolores!
                            </div>
                        </div>
                        <div class="cbp-item wow bounceIn">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="http://img.djavaui.com/?create=280x280,81B71A?f=ffffff" alt="...">
                                </div>
                            </div>
                            <div class="cbp-l-grid-slider-team-wrap">
                                <div class="cbp-l-grid-slider-team-name">Bobby Pena</div>
                                <div class="cbp-l-grid-slider-team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="cbp-l-grid-slider-team-position">Developer</div>
                            <div class="cbp-l-grid-slider-team-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla nemo ad quibusdam consequuntur sapiente officia natus reprehenderit, doloribus in dolores!
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="http://img.djavaui.com/?create=280x280,81B71A?f=ffffff" alt="...">
                                </div>
                            </div>
                            <div class="cbp-l-grid-slider-team-wrap">
                                <div class="cbp-l-grid-slider-team-name">Tyrion Lannister</div>
                                <div class="cbp-l-grid-slider-team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="cbp-l-grid-slider-team-position">CEO, Director General</div>
                            <div class="cbp-l-grid-slider-team-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla nemo ad quibusdam consequuntur sapiente officia natus reprehenderit, doloribus in dolores!
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="http://img.djavaui.com/?create=280x280,81B71A?f=ffffff" alt="...">
                                </div>
                            </div>
                            <div class="cbp-l-grid-slider-team-wrap">
                                <div class="cbp-l-grid-slider-team-name">Mary Jane</div>
                                <div class="cbp-l-grid-slider-team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="cbp-l-grid-slider-team-position">Support Staff</div>
                            <div class="cbp-l-grid-slider-team-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla nemo ad quibusdam consequuntur sapiente officia natus reprehenderit, doloribus in dolores!
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="http://img.djavaui.com/?create=280x280,81B71A?f=ffffff" alt="...">
                                </div>
                            </div>
                            <div class="cbp-l-grid-slider-team-wrap">
                                <div class="cbp-l-grid-slider-team-name">Tania Grue</div>
                                <div class="cbp-l-grid-slider-team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="cbp-l-grid-slider-team-position">Finance</div>
                            <div class="cbp-l-grid-slider-team-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla nemo ad quibusdam consequuntur sapiente officia natus reprehenderit, doloribus in dolores!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /#team-members -->
    <!--/ END TEAM MEMBERS -->

    <!-- START @TESTIMONIAL -->
    <section id="testimonial">
        <div class="cbp-l-slider-testimonials-wrap">
            <div id="js-grid-slider-testimonials" class="cbp cbp-slider-edge">
                <div class="cbp-item graphic">
                    <div class="cbp-l-grid-slider-testimonials-body">
                        “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat”
                    </div>
                    <div class="cbp-l-grid-slider-testimonials-footer">
                        Martin Timmermans, Co-Founder, Kripik Tempe
                    </div>
                </div>
                <div class="cbp-item web-design logos">
                    <div class="cbp-l-grid-slider-testimonials-body">
                        “Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum”
                    </div>
                    <div class="cbp-l-grid-slider-testimonials-footer">
                        Noemi Lombardi, CEO, Gembus Goreng
                    </div>
                </div>
                <div class="cbp-item graphic logos">
                    <div class="cbp-l-grid-slider-testimonials-body">
                        “Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo”
                    </div>
                    <div class="cbp-l-grid-slider-testimonials-footer">
                        Silvia Flores, CEO, Jagung Bakar
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /#testimonial -->
    <!--/ END TESTIMONIAL -->

    <!-- START @FOOTER -->
     <!-- /#footer -->
    <!--/ END FOOTER -->
</section> <!-- /#wrapper -->
<!--/ END WRAPPER -->

<footer id="footer">
        <div class="footer-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn">
                        <img src="http://img.djavaui.com/?create=175x50,81B71A?f=ffffff" alt="..." class="footer-logo"/>
                        <p>
                            Lorem ipsum dolor amet consecte adipisicing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco.
                        </p>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn">
                        <h4 class="footer-title">latest from blog</h4>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img src="http://img.djavaui.com/?create=64x64,81B71A?f=ffffff" alt="..."/>
                                </a>
                            </div>
                            <div class="media-body">
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img src="http://img.djavaui.com/?create=64x64,81B71A?f=ffffff" alt="..."/>
                                </a>
                            </div>
                            <div class="media-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, tempor adipiscing magna aliqua.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn">
                        <h4 class="footer-title">popular tags</h4>
                        <ul class="footer-tags">
                            <li><a href="javascript:void(0);" class="text-center">App Showcase</a></li>
                            <li><a href="javascript:void(0);" class="text-center">Android</a></li>
                            <li><a href="javascript:void(0);" class="text-center">Bootstrap</a></li>
                            <li><a href="javascript:void(0);" class="text-center">Mobile</a></li>
                            <li><a href="javascript:void(0);" class="text-center">Free Apps</a></li>
                            <li><a href="javascript:void(0);" class="text-center">Wrapbootstrap</a></li>
                            <li><a href="javascript:void(0);" class="text-center">App Showcase</a></li>
                            <li><a href="javascript:void(0);" class="text-center">Apps theme</a></li>
                            <li><a href="javascript:void(0);" class="text-center">Retina Display</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn">
                        <h4 class="footer-title">flickr photos</h4>
                        <ul class="footer-photos">
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="http://img.djavaui.com/?create=80x80,81B71A?f=ffffff" alt="..."/>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="http://img.djavaui.com/?create=80x80,81B71A?f=ffffff" alt="..."/>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="http://img.djavaui.com/?create=80x80,81B71A?f=ffffff" alt="..."/>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="http://img.djavaui.com/?create=80x80,81B71A?f=ffffff" alt="..."/>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="http://img.djavaui.com/?create=80x80,81B71A?f=ffffff" alt="..."/>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="http://img.djavaui.com/?create=80x80,81B71A?f=ffffff" alt="..."/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-link">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wow bounceIn pull-left footer-copyright">Copyright &copy; <span id="footer-copyright"></span>. Designed by <a href="http://enviousdigital.co.uk" target="_blank">Envious Digital</a></div>
                    </div>
                    <div class="col-md-6">
                        <ul class="wow bounceIn pull-right footer-social" data-wow-delay="0.5s">
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<!-- START @BACK TOP -->
<div id="back-top" class="animated pulse circle">
    <i class="icon-arrow-up icons"></i>
</div><!-- /#back-top -->
<!--/ END BACK TOP -->

<!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
<!-- START @CORE PLUGINS -->
<script src="<?php echo base_url('assets/global/plugins/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/global/plugins/bower_components/retina.js/dist/retina.min.js'); ?>"></script>
<!--/ END CORE PLUGINS -->

<!-- START @PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url('assets/global/plugins/bower_components/wow/dist/wow.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/commercial/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js'); ?>"></script>
<!-- REVOLUTION JS FILES -->
<script src="<?php echo base_url('assets/commercial/plugins/slider-revolution/revolution/js/jquery.themepunch.tools.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/commercial/plugins/slider-revolution/revolution/js/jquery.themepunch.revolution.min.js'); ?>"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
    (Load Extensions only on Local File Systems !
    The following part can be removed on Server for On Demand Loading) -->
<script src="<?php echo base_url('assets/commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.actions.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.carousel.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.kenburn.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.migration.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.navigation.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.parallax.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.slideanims.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.video.min.js'); ?>"></script>
<!--/ END PAGE LEVEL PLUGINS -->

<!-- START @PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url('front-assets/js/blankon.app-showcase.js'); ?>"></script>
<!--/ END PAGE LEVEL SCRIPTS -->
<!--/ END JAVASCRIPT SECTION -->

<!-- START GOOGLE ANALYTICS -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-55892530-1', 'auto');
    ga('send', 'pageview');

</script>
<!--/ END GOOGLE ANALYTICS -->

</body>
<!--/ END BODY -->

</html>
