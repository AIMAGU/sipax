<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="<?= Yii::$app->language ?>"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title><?= Html::encode($this->title) ?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/assets/bootstrap-rtl/css/bootstrap-rtl.min.css" rel="stylesheet" />
   <link href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/assets/bootstrap-rtl/css/bootstrap-responsive-rtl.min.css" rel="stylesheet" />
   <link href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/css/style.css" rel="stylesheet" />
   <link href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/css/style_responsive.css" rel="stylesheet" />
   <link href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/css/style_purple.css" rel="stylesheet" id="style_color" />

   <link href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/assets/uniform/css/uniform.default.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!-- BEGIN LOGO -->
               <a class="brand" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/index.html">
                   <img src="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/img/logo.png" alt="Admin Lab" />
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <div id="top_menu" class="nav notify-row">
                   <!-- BEGIN NOTIFICATION -->
                   <ul class="nav top-menu">
                       <!-- BEGIN SETTINGS -->
                       <li class="dropdown">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#" data-original-title="Settings">
                               <i class="icon-cog"></i>
                           </a>
                       </li>
                       <!-- END SETTINGS -->
                       <!-- BEGIN INBOX DROPDOWN -->
                       <li class="dropdown" id="header_inbox_bar">
                           <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-envelope-alt"></i>
                               <span class="badge badge-important">5</span>
                           </a>
                           <ul class="dropdown-menu extended inbox">
                               <li>
                                   <p>You have 5 new messages</p>
                               </li>
                               <li>
                                   <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#">
                                       <span class="photo"><img src="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#">
                                       <span class="photo"><img src="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Rafiqul Islam</span>
									<span class="time">10 mins</span>
									</span>
									<span class="message">
									 Hi, Mosaddek Bhai how are you ?
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#">
                                       <span class="photo"><img src="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Sumon Ahmed</span>
									<span class="time">3 hrs</span>
									</span>
									<span class="message">
									    This is awesome dashboard templates
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#">
                                       <span class="photo"><img src="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#">See all messages</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END INBOX DROPDOWN -->
                       <!-- BEGIN NOTIFICATION DROPDOWN -->
                       <li class="dropdown" id="header_notification_bar">
                           <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#" class="dropdown-toggle" data-toggle="dropdown">

                               <i class="icon-bell-alt"></i>
                               <span class="badge badge-warning">7</span>
                           </a>
                           <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>You have 7 new notifications</p>
                               </li>
                               <li>
                                   <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Server #3 overloaded.
                                       <span class="small italic">34 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#">
                                       <span class="label label-warning"><i class="icon-bell"></i></span>
                                       Server #10 not respoding.
                                       <span class="small italic">1 Hours</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Database overloaded 24%.
                                       <span class="small italic">4 hrs</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#">
                                       <span class="label label-success"><i class="icon-plus"></i></span>
                                       New user registered.
                                       <span class="small italic">Just now</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#">
                                       <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                       Application error.
                                       <span class="small italic">10 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#">See all notifications</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END NOTIFICATION DROPDOWN -->

                   </ul>
               </div>
               <!-- END  NOTIFICATION -->
               <div class="top-nav ">
                   <ul class="nav pull-left top-menu" >
                       <!-- BEGIN SUPPORT -->
                       <li class="dropdown mtop5">

                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#" data-original-title="Chat">
                               <i class="icon-comments-alt"></i>
                           </a>
                       </li>
                       <li class="dropdown mtop5">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#" data-original-title="Help">
                               <i class="icon-headphones"></i>
                           </a>
                       </li>
                       <!-- END SUPPORT -->
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown">
                           <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/img/avatar1_small.jpg" alt="">
                               <span class="username">Mosaddek Hossain</span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu">
                               <li><a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#"><i class="icon-user"></i> My Profile</a></li>
                               <li><a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#"><i class="icon-tasks"></i> My Tasks</a></li>
                               <li><a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/#"><i class="icon-calendar"></i> Calendar</a></li>
                               <li class="divider"></li>
                               <li><a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/login.html"><i class="icon-key"></i> Log Out</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">

         <div class="sidebar-toggler hidden-phone"></div>   

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <li class="has-sub">
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/javascript:;" class="">
                      <span class="icon-box"> <i class="icon-dashboard"></i></span> Dashboard
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/index.html">Dashboard 1</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/index_2.html">Dashboard 2</a></li>

                  </ul>
              </li>
              <li class="has-sub">
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/javascript:;" class="">
                      <span class="icon-box"> <i class="icon-book"></i></span> UI Elements
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/ui_elements_general.html">General</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/ui_elements_buttons.html">Buttons</a></li>

                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/ui_elements_tabs_accordions.html">Tabs & Accordions</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/ui_elements_typography.html">Typography</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/tree_view.html">Tree View</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/nestable.html">Nestable List</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/javascript:;" class="">
                      <span class="icon-box"><i class="icon-cogs"></i></span> Components
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/calendar.html">Calendar</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/data_table.html">Data Table</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/grids.html">Grids</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/charts.html">Visual Charts</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/messengers.html">Conversations</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/gallery.html"> Gallery</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/javascript:;" class="">
                      <span class="icon-box"><i class="icon-tasks"></i></span> Form Stuff
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/form_layout.html">Form Layouts</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/form_component.html">Form Components</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/form_wizard.html">Form Wizard</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/form_validation.html">Form Validation</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/dropzone.html">Dropzone File Upload </a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/javascript:;" class="">
                      <span class="icon-box"><i class="icon-fire"></i></span> Icons
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/font_awesome.html">Font Awesome</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/glyphicons.html">Glyphicons</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/javascript:;" class="">
                      <span class="icon-box"><i class="icon-map-marker"></i></span> Maps
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/maps_google.html"> Google Maps</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/maps_vector.html"> Vector Maps</a></li>
                  </ul>
              </li>
              <li class="has-sub active">
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/javascript:;" class="">
                      <span class="icon-box"><i class="icon-file-alt"></i></span> Sample Pages
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li class="active"><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/blank.html">Blank Page</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/sidebar_closed.html">Sidebar Closed Page</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/coming_soon.html">Coming Soon</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/blog.html">Blog</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/about_us.html">About Us</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/contact_us.html">Contact Us</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/javascript:;" class="">
                      <span class="icon-box"><i class="icon-glass"></i></span> Extra
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/lock.html">Lock Screen</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/profile.html">Profile</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/invoice.html">Invoice</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/pricing_tables.html">Pricing Tables</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/faq.html">FAQ</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/404.html">404 Error</a></li>
                      <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/500.html">500 Error</a></li>
                  </ul>
              </li>
              <li><a class="" href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/login.html"><span class="icon-box"><i class="icon-user"></i></span> Login Page</a></li>
          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-navy-blue" data-style="navy-blue"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     <small>blank page sample</small>
                     Blank Page
                   </h3>
				    <?= Breadcrumbs::widget([
						'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
					]) ?>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-globe"></i>Blank Page</h4>
                           <span class="tools">
                           <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/javascript:;" class="icon-chevron-down"></a>
                           <a href="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/javascript:;" class="icon-remove"></a>
                           </span>                    
                        </div>
                        <div class="widget-body">
                        <?= Alert::widget() ?>
						<?= $content ?> 
                        </div>
                  </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Admin Lab Dashboard.
      <div class="span pull-left">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/js/jquery-1.8.3.min.js"></script>
   <script src="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/assets/bootstrap-rtl/js/bootstrap.min.js"></script>
   <script src="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/js/excanvas.js"></script>
   <script src="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/assets/uniform/jquery.uniform.min.js"></script>
   <script src="<?php echo Yii::$app->request->baseUrl; ?>/adminlab_v12_rtl/js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>