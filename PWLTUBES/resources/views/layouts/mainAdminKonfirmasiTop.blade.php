<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @yield('css')

<body class="fixed-left">
    <div id="wrapper">
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a class="navbar-brand" href="/home"><img src="{{ asset('images/logoe-tas.png') }}" height="25"></a>

            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Navbar-left -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>


                    </ul>

                    <!-- Right(Notification) -->
                    <ul class="nav navbar-nav navbar-right">


                        <li class="dropdown user-box">
                            <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown"
                                aria-expanded="true">
                                <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-circle user-img">
                            </a>

                            <ul
                                class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <li>
                                    <h5>Hi, {{ Auth::user()->name }}</h5>
                                </li>

                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>

                    </ul> <!-- end navbar-right -->

                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Navigation</li>

                        <li class="has_sub">
                            <a href="/home" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span>
                                    Dashboard </span> </a>

                        </li>

                        <li class="has_sub">
                            <a href="/buatevent" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i>
                                <span>
                                    Create Event </span> <span></span></a>
                        </li>

                        <li class="has_sub">
                            <a href="/editevent" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i>
                                <span>
                                </span>Edit Event <span></span></a>
                        </li>

                        <li class="has_sub">
                            <a href="/accounts" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i>
                                <span>Data Siswa </span> <span></span></a>
                        </li>
                        <li class="has_sub">
                            <a href="/buatacc" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i>
                                <span>Create Account</span> <span></span></a>
                        </li>
                        <li class="has_sub">
                            <a href="/updatetopup" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i>
                                <span>
                                </span>Update Topup<span></span></a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Sidebar -left -->

        </div>
        @yield('content')
        @yield('script')
