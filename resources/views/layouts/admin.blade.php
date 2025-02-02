<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ameen - Bootstrap Admin Dashboard HTML Template</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link href="{{asset('assets/plugins/nestable/css/nestable.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/js/modernizr-3.6.0.min.js')}}">
</head>

<body class="v-light vertical-nav fix-header fix-sidebar">
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/></svg>
    </div>
</div>
<div id="main-wrapper">
    <!-- header -->
    <div class="header">
        <div class="nav-header">
            <div class="brand-logo"><a href=""><b><img src="{{asset('assets/assets/images/logo.png')}}" alt=""> </b><span class="brand-title"><img src="{{asset('assets/assets/images/logo-text.png')}}" alt=""></span></a>
            </div>
            <div class="nav-control">
                <div class="hamburger"><span class="line"></span> <span class="line"></span> <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header-content">
            <div class="header-left">
                <ul>
                    <li class="icons position-relative"><a><i class="icon-magnifier f-s-16"></i></a>
                        <div class="drop-down animated bounceInDown">
                            <div class="dropdown-content-body">
                                <div class="header-search" id="header-search">
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" />
                                            <div class="input-group-append"><span class="input-group-text"><i class="icon-magnifier"></i></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-right">
                <ul>
                    <li class="icons"><a><i class="mdi mdi-bell f-s-18" aria-hidden="true"></i><div class="pulse-css"></div></a>
                        <div class="drop-down animated bounceInDown">
                            <div class="dropdown-content-heading"><span class="text-left">Recent Notifications</span>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="{{asset('assets/images/avatar/1.jpg')}}" alt="">
                                            <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Mr. Saifun</div>
                                                <div class="notification-text">5 members joined today</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="{{asset('assets/images/avatar/2.jpg')}}" alt="">
                                            <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Mariam</div>
                                                <div class="notification-text">likes a photo of you</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="{{asset('assets/images/avatar/3.jpg')}}" alt="">
                                            <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Tasnim</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="{{{asset('assets/images/avatar/4.jpg')}}}" alt="">
                                            <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Ishrat Jahan</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-center"><a href="#" class="more-link">See All</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="icons"><a><i class="mdi mdi-comment f-s-18" aria-hidden="true"></i><div class="pulse-css"></div></a>
                        <div class="drop-down animated bounceInDown">
                            <div class="dropdown-content-heading"><span class="text-left">2 New Messages</span>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li class="notification-unread">
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="{{asset('assets/images/avatar/1.jpg')}}" alt="">
                                            <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Saiul Islam</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-unread">
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="{{asset('assets/images/avatar/2.jpg')}}" alt="">
                                            <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Ishrat Jahan</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="{{asset('assets/images/avatar/3.jpg')}}" alt="">
                                            <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Saiul Islam</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="pull-left m-r-10 avatar-img" src="{{asset('assets/images/avatar/4.jpg')}}" alt="">
                                            <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                <div class="notification-heading">Ishrat Jahan</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-center"><a href="#" class="more-link">See All</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="icons">
                        <a> <i class="mdi mdi-crosshairs-gps f-s-18" aria-hidden="true"></i>
                            <div class="pulse-css"></div>
                        </a>
                        <div class="drop-down dropdown-task animated bounceInDown">
                            <div class="dropdown-content-heading"><span class="text-left">Task Update</span>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="notification-content"><small class="notification-timestamp pull-right">85% Complete</small>
                                                <div class="notification-heading">Task One</div>
                                                <div class="progress">
                                                    <div style="width: 85%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-success"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="notification-content"><small class="notification-timestamp pull-right">60% Complete</small>
                                                <div class="notification-heading">Task Two</div>
                                                <div class="progress">
                                                    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-primary"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="notification-content"><small class="notification-timestamp pull-right">25% Complete</small>
                                                <div class="notification-heading">Task Three</div>
                                                <div class="progress">
                                                    <div style="width: 25%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar" class="progress-bar progress-bar-warning"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="notification-content"><small class="notification-timestamp pull-right">75% Complete</small>
                                                <div class="notification-heading">Task Four</div>
                                                <div class="progress">
                                                    <div style="width: 75%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" role="progressbar" class="progress-bar progress-bar-danger"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-center"><a href="#" class="more-link">See All</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="icons"><a><i class="mdi mdi-account f-s-20" aria-hidden="true"></i></a>
                        <div class="drop-down dropdown-profile animated bounceInDown">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li><a href="#"><i class="mdi mdi-email"></i> <span>Inbox</span></a>
                                    </li>
                                    <li><a href="#"><i class="mdi mdi-settings"></i> <span>Setting</span></a>
                                    </li>
                                    <li><a href="#"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                    </li>
                                    <li>
                                            <form action="{{route('logout')}}" method="post">
                                                @csrf
                                                <button type="submit">Logout</button>
                                            </form>


                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #/ header -->
    <!-- sidebar -->
    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Main</li>
                <li><a href="{{route('admin.index')}}"><i class=" mdi mdi-view-dashboard"></i> <span class="nav-text">Дашборд</span></a>
                </li>



                <li><a href=""><i class="mdi mdi-trophy-variant"></i> <span class="nav-text">Викторины</span></a></li>
                <li><a href="{{route('admin.modules.index')}}"><i class="mdi mdi-view-module"></i> <span class="nav-text">Модули</span></a></li>
                <li><a href="{{route('admin.modules-step.index')}}"><i class="mdi mdi-school"></i> <span class="nav-text">Уроки</span></a></li>
                <li><a href="{{route('admin.categories.index')}}"><i class="mdi mdi-tag"></i> <span class="nav-text">Категории</span></a></li>
                <li><a href="{{route('admin.tails.index')}}"><i class="mdi mdi-weather-night"></i> <span class="nav-text">Сказки</span></a></li>
                <li><a href="{{route('admin.regions.index')}}"><i class="mdi mdi-map"></i> <span class="nav-text">Регионы</span></a></li>
                <li><a href=""><i class="mdi mdi-puzzle"></i> <span class="nav-text">Игровой раздел</span></a></li>
                <li><a href=""><i class="mdi mdi-account"></i> <span class="nav-text">Пользователи</span></a></li>
            </ul>
        </div>
        <!-- #/ nk nav scroll -->
    </div>
    <!-- #/ sidebar -->
    <!-- content body -->
    <div class="content-body">
        <div class="container">
            @yield('content')
        </div>
        <!-- #/ container -->
    </div>
    <!-- #/ content body -->
    <!-- footer -->
    <div class="footer">
        <div class="copyright">
            <p>Copyright &copy; <a href="#">Ameen</a> 2018</p>
        </div>
    </div>
    <!-- #/ footer -->
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- Common JS -->
<!-- Custom script -->
<script src="{{asset('assets/js/custom.min.js')}}"></script>
<script src="{{asset('assets/plugins/nestable/js/jquery.nestable.js')}}"></script>
<script src="{{asset('assets/plugins/nestable/js/nestable.init.js')}}"></script>
<!-- Chartjs chart -->
<script src="{{asset('assets/plugins/chartjs/Chart.bundle.js')}}"></script>
<!-- Custom dashboard script -->
<script src="{{asset('assets/js/dashboard-1.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
</body>

</html>
