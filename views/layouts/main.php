<?php

/* @var $this \yii\web\View */
/* @var $content string */
use kartik\alert\AlertBlock;
//use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use app\models\Konsultasi;
use app\models\User;
use app\assets\AppAsset;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo Yii::$app->request->baseUrl; ?>/material/assets/images/logo-light-icon.png">
    <title><?= Html::encode($this->title) ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/material/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/material/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/material/css/colors/red-dark.css" id="theme" rel="stylesheet">
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/material/assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
	<style>
		.help-block {
			font-family:Verdana, Arial, Helvetica, sans-serif;
			font-size:10px;
			color:#f62d51 !important;
		}
	</style>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/material/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo Yii::$app->request->baseUrl; ?>/material/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="<?php echo Yii::$app->request->baseUrl; ?>/material/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="<?php echo Yii::$app->request->baseUrl; ?>/material/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!--<li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-grid"></i></a>
                            <div class="dropdown-menu scale-up-left">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid" src="<?php //echo Yii::$app->request->baseUrl; ?>/material/assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="<?php //echo Yii::$app->request->baseUrl; ?>/material/assets/images/big/img2.jpg" alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="<?php //echo Yii::$app->request->baseUrl; ?>/material/assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">ACCORDION</h4>
                                        <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Collapsible Group Item #1
                                                </a>
                                              </h5> </div>
                                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingTwo">
                                                    <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Collapsible Group Item #2
                                                </a>
                                              </h5> </div>
                                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingThree">
                                                    <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  Collapsible Group Item #3
                                                </a>
                                              </h5> </div>
                                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>-->
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo Yii::$app->request->baseUrl; ?>/foto/<?= User::find()->where('id = '.Yii::$app->user->identity->id)->one()->foto; ?>" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?php echo Yii::$app->request->baseUrl; ?>/foto/<?= User::find()->where('id = '.Yii::$app->user->identity->id)->one()->foto; ?>" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?= Yii::$app->user->isGuest ? 'Pengujung' : Yii::$app->user->identity->username; ?></h4>
                                                <p class="text-muted"><?= Yii::$app->session->get('email'); ?><br>
												<small>Login sebagai <?= Yii::$app->session->get('level'); ?></small>
												</p>
												<?= Html::a('<i class="fa fa-power-off"></i> Logout', ['/site/logout'], ['class'=>'btn btn-rounded btn-danger btn-sm']) ?>
												<?php /* echo Html::beginForm(['/site/logout'], 'post')
													. Html::submitButton(
														'<i class="fa fa-power-off"></i> Logout',
														['class' => 'btn btn-rounded btn-danger btn-sm']
													)
													. Html::endForm() */
												?>
											</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(<?php echo Yii::$app->request->baseUrl; ?>/material/assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo Yii::$app->request->baseUrl; ?>/foto/<?= User::find()->where('id = '.Yii::$app->user->identity->id)->one()->foto; ?>"  alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" ><?= Yii::$app->user->isGuest ? 'Pengujung' : Yii::$app->user->identity->username; ?></a>
                        
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
						<?php if(!Yii::$app->user->isGuest && !empty(Yii::$app->session->get('level'))): ?>
							<li>
								<?= Html::a('<i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span>', ['/site/index'], ['class'=>'waves-effect waves-dark']) ?>
							</li>
							<?php if(Yii::$app->session->get('level')=='admin' || Yii::$app->session->get('level')=='petugas'): ?>
							<li>
								<?= Html::a('<i class="mdi mdi-elevator"></i><span class="hide-menu">Gejala </span>', ['/gejala/index'], ['class'=>'waves-effect waves-dark']) ?>
							</li>
							<li>
								<?= Html::a('<i class="mdi mdi-flask-outline"></i><span class="hide-menu">Diagnosa </span>', ['/diagnosa'], ['class'=>'waves-effect waves-dark']) ?>
							</li>
							<?php endif; ?>
							<?php if(Yii::$app->session->get('level')=='petugasakhir'): ?>
								<li>
									<?= Html::a('<i class="mdi mdi-chemical-weapon"></i><span class="hide-menu">Konsultasi </span>', ['/konsultasi/create'], ['class'=>'waves-effect waves-dark']) ?>
								</li>
							<?php endif; ?>
							<li>
							<?php if(Yii::$app->session->get('level')=='pakar'): ?>
								<?= Html::a('<i class="mdi mdi-chart-scatterplot-hexbin"></i><span class="hide-menu">Pakar </span>', ['/pakar'], ['class'=>'waves-effect waves-dark']) ?>
							<?php endif; ?>
							</li>
							<?php if(Yii::$app->session->get('level')=='admin' || Yii::$app->session->get('level')=='petugas'): ?>
							<li>
								<?= Html::a('<i class="mdi mdi-directions-fork"></i><span class="hide-menu">Aturan </span>', ['/aturan'], ['class'=>'waves-effect waves-dark']) ?>
							</li>
							<li>
								<?= Html::a('<i class="mdi mdi-chemical-weapon"></i><span class="hide-menu">Konsultasi </span>', ['/konsultasi/create'], ['class'=>'waves-effect waves-dark']) ?>
							</li>
							<li>
								<?= Html::a('<i class="mdi mdi-book-plus"></i><span class="hide-menu">Hasil Konsultasi </span>', ['/konsultasi'], ['class'=>'waves-effect waves-dark']) ?>
							</li>
							<li>
								<?= Html::a('<i class="mdi mdi-account"></i><span class="hide-menu">User </span>', ['/user/index'], ['class'=>'waves-effect waves-dark']) ?>
							</li>
							<?php endif; ?>
						<?php endif; ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <?= Html::a('<i class="ti-settings"></i>', ['/site/pengaturan'], ['class'=>'link','data-toggle'=>'tooltip', 'title'=>'Pengaturan']) ?>
                <?= Html::a('<i class="mdi mdi-certificate"></i>', ['/site/pengembang'], ['class'=>'link','data-toggle'=>'tooltip', 'title'=>'Pengembang']) ?>
                <?= Html::a('<i class="mdi mdi-power"></i>', ['/site/logout'], ['class'=>'link','data-toggle'=>'tooltip', 'title'=>'Logout']) ?>
			</div>
            <!-- End Bottom points-->
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0"><?= Html::encode($this->title) ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Sistem Pakar Diagnosa Penyakit Anthrax</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>KONSULTASI</small></h6>
                                    <h4 class="m-t-0 text-info"><i class="ti-heart-broken"></i> <?= Konsultasi::find()->count(); ?></h4></div>
                                <div class="spark-chart">
                                    <div id="monthchart"></div>
                                </div>
                            </div>
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>PENGGUNA</small></h6>
                                    <h4 class="m-t-0 text-primary"><i class="ti-user"></i> <?= User::find()->count(); ?></h4></div>
                                <div class="spark-chart">
                                    <div id="lastmonthchart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" style="border:0px solid black;width:100%;overflow-y:hidden;overflow-x:scroll;">
                                <?php
									if (isset($_SESSION['success'])){
										echo '<div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                            <i class="fa fa-check-circle"></i> 
											'.Yii::$app->session->getFlash("success").'
                                        </div>';
									}elseif (isset($_SESSION['danger'])){
										echo '<div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                            <i class="fa fa-exclamation-circle"></i> 
											'.Yii::$app->session->getFlash("danger").'
                                        </div>';
									}
								?>
								<?= $content ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <footer class="footer">
                © <?php echo date('Y')." ".Yii::$app->name; ?>. All Reserved Rights
				<small class="text-danger"><?php //echo Yii::powered()." ".Yii::getVersion(); ?></small>
            </footer>
        </div>
    </div>
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/material/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/material/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/material/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/material/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/material/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/material/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/material/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/material/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/material/js/custom.min.js"></script>
	<script src="<?php echo Yii::$app->request->baseUrl; ?>/material/assets/plugins/toast-master/js/jquery.toast.js"></script>
	<script src="<?php echo Yii::$app->request->baseUrl; ?>/material/js/toastr.js"></script>
	<!-- Chart JS -->
    
</body>

</html>
