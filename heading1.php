<?php
$query = $conn->query("select * from members where member_id = '$session_id'");
$row = $query->fetch();
$id = $row['member_id'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <!--        <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/css/bootstrap.min.css">-->
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="bower_components/datedropper/css/datedropper.min.css" />
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


    <link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>
<div id="pcoded" class="pcoded" style="font-size: 12px;">
    <div class="pcoded-container navbar-wrapper">
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">

                        <!-- Main body start -->
                        <div class="main-body user-profile">
                            <div class="page-wrapper">
                                <!-- Page-body start -->
                                <div class="page-body">
                                    <!--profile cover start-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="cover-profile">
                                                <div class="profile-bg-img">
                                                    <img class="profile-bg-img img-fluid" src="images/bg-img1.jpg" alt="bg-img">
                                                    <div class="card-block user-info">
                                                        <div class="col-md-12">
                                                            <div class="media-left">
                                                                <a href="#" class="profile-image">
                                                                    <img class="user-img img-circle" src="<?php echo $image; ?>" alt="user-img">
                                                                </a>
                                                            </div>
                                                            <div class="media-body row">
                                                                <div class="col-lg-12">
                                                                    <div class="user-title">
                                                                        <h2><?php echo $row['firstname']." ".$row['lastname']; ?></h2>
                                                                        <span class="text-white"><?php echo $row['work']; ?></span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="pull-right cover-btn">
                                                                        <button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i> Editar perfil</button>
                                                                        <button type="button" class="btn btn-primary"><i class="icofont icofont-pencil"></i> Cambiar foto</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--profile cover end-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- tab content start -->
                                            <div class="tab-content">
                                                <!-- tab panel personal start -->
                                                <div class="tab-pane active" id="personal" role="tabpanel">
                                                    <!-- personal card start -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-header-text">Informacion personal</h5>
                                                        </div>
                                                        <div class="card-block">
                                                            <div class="view-info">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="general-info">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table m-0">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <th scope="row">Direccion</th>
                                                                                                <td><?php echo $row['address']; ?></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Genero</th>
                                                                                                <td><?php echo $row['gender']; ?></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Fecha de nacimiento</th>
                                                                                                <td><?php echo $row['birthdate']; ?></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Numero de contacto</th>
                                                                                                <td><?php echo $row['mobile']; ?></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Trabajo del usuario</th>
                                                                                                <td><?php echo $row['work']; ?></td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end of row -->
                                                                        </div>
                                                                        <!-- end of general info -->
                                                                    </div>
                                                                    <!-- end of col-lg-12 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of edit-info -->
                                                        </div>
                                                        <!-- end of card-block -->
                                                    </div>
                                                    <!-- personal card end-->
                                                </div>
                                            </div>
                                            <!-- tab content end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-body end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- classie js -->
<script type="text/javascript" src="bower_components/classie/js/classie.js"></script>
<!-- Bootstrap date-time-picker js -->
<script type="text/javascript" src="assets/pages/advance-elements/moment-with-locales.min.js"></script>
<script type="text/javascript" src="bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>
<!-- Date-range picker js -->
<script type="text/javascript" src="bower_components/bootstrap-daterangepicker/js/daterangepicker.js"></script>
<!-- Date-dropper js -->
<script type="text/javascript" src="bower_components/datedropper/js/datedropper.min.js"></script>
<!-- data-table js -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- ck editor -->
<script src="assets/pages/ckeditor/ckeditor.js"></script>
<!-- echart js -->
<script src="assets/pages/chart/echarts/js/echarts-all.js" type="text/javascript"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/pages/user-profile.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
</body>

</html>
