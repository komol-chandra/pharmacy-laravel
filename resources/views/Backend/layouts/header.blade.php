<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">

        {{-- Logo Section Begin --}}
        <ul class="navbar-item theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <!-- <a href="index.html">
                        <img src="assets/img/logo.svg" class="navbar-logo" alt="logo">
                    </a> -->
            </li>
            <li class="nav-item theme-text">
                <a href="{{url('/admin')}}" class="nav-link">Pharmacy</a>
            </li>
        </ul>
        {{-- Logo Section END --}}

        {{-- Search Section Begin --}}
        <ul class="navbar-item flex-row ml-md-0 ml-auto">
            <li class="nav-item align-self-center search-animated">
                <i data-feather="menu"></i>
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                    </div>
                </form>
            </li>
        </ul>
        {{-- Search Section END --}}

        <ul class="navbar-item flex-row ml-md-auto">
            {{-- Language Section Begin --}}
            <li class="nav-item dropdown language-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('Backend_assets/assets/img/ca.png')}}" class="flag-width" alt="flag">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img
                            src="{{asset('Backend_assets/assets/img/de.png')}}" class="flag-width" alt="flag"> <span
                            class="align-self-center">&nbsp;German</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img
                            src="{{asset('Backend_assets/assets/img/jp.png')}}" class="flag-width" alt="flag"> <span
                            class="align-self-center">&nbsp;Japanese</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img
                            src="{{asset('Backend_assets/assets/img/fr.png')}}" class="flag-width" alt="flag"> <span
                            class="align-self-center">&nbsp;French</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img
                            src="{{asset('Backend_assets/assets/img/ca.png')}}" class="flag-width" alt="flag"> <span
                            class="align-self-center">&nbsp;English</span></a>
                </div>
            </li>
            {{-- Language Section END --}}

            {{-- Mail Section Begin --}}
            <li class="nav-item dropdown message-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="mail"></i>
                </a>
                <div class="dropdown-menu p-0 position-absolute" aria-labelledby="messageDropdown">
                    <div class="">
                        <a class="dropdown-item">
                            <div class="">

                                <div class="media">
                                    <div class="user-img">
                                        <img class="usr-img rounded-circle"
                                            src="{{asset('Backend_assets/assets/img/profile-11.jpg')}}" alt="profile">
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h5 class="usr-name">Kara Young</h5>
                                            <p class="msg-title">ACCOUNT UPDATE</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </li>
            {{-- Mail Section END --}}

            {{-- Notification Section Begin --}}
            <li class="nav-item dropdown notification-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="bell"></i><span class="badge badge-success"></span>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                    <div class="notification-scroll">

                        <div class="dropdown-item">
                            <div class="media">
                                <i data-feather="heart"></i>
                                <div class="media-body">
                                    <div class="notification-para"><span class="user-name">Shaun Park</span> likes your
                                        photo.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            {{-- Notification Section END --}}

            {{-- Language Section Begin --}}
            <li class="nav-item dropdown user-profile-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <img src="{{asset('Backend_assets/assets/img/profile-16.jpg')}}" alt="avatar">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="">
                        <div class="dropdown-item">
                            <a class="" href="{{url('/admin/profile')}}"><i data-feather="user"></i> My Profile</a>
                        </div>
                        <div class="dropdown-item">
                            <a class="" href="{{url('/admin/password')}}"><i data-feather="lock"></i> Change Password</a>
                        </div>
                        <div class="dropdown-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"
                                href="auth_login.html"><i data-feather="log-out"></i> Sign Out</a>
                        </div>
                    </div>
                </div>
            </li>
            {{-- Profile Section END --}}

        </ul>
    </header>
</div>
