<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">

    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
               
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar" src="assets/images/user.png" alt="" data-toggle="tooltip" data-placement="right" title="User Menu"/></a>
                  </div>
            </div>
            <div class="hright">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fa  fa-align-left"></i></a>
                </div>            
            </div>
        </div>
    </div>

    <div class="user_div">
        <h5 class="brand-name mb-4">Solution Founder<a href="javascript:void(0)" class="user_btn"><i class="icon-logout"></i></a></h5>
        <div class="card-body">
            <a href="page-profile.html"><img class="card-profile-img" src="assets/images/sm/avatar1.jpg" alt=""></a>
            <h6 class="mb-0">Peter Richards</h6>
            <span>peter.richard@gmail.com</span>
            <div class="d-flex align-items-baseline mt-3">
                <h3 class="mb-0 mr-2">9.8</h3>
                <p class="mb-0"><span class="text-success">1.6% <i class="fa fa-arrow-up"></i></span></p>
            </div>
            <div class="progress progress-xs">
                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-indigo" role="progressbar" style="width: 13%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h6 class="text-uppercase font-10 mt-1">Performance Score</h6>
            <hr>
            <p>Activity</p>
            <ul class="new_timeline">
                <li>
                    <div class="bullet pink"></div>
                    <div class="time">11:00am</div>
                    <div class="desc">
                        <h3>Attendance</h3>
                        <h4>Computer Class</h4>
                    </div>
                </li>
                <li>
                    <div class="bullet pink"></div>
                    <div class="time">11:30am</div>
                    <div class="desc">
                        <h3>Added an interest</h3>
                        <h4>“Volunteer Activities”</h4>
                    </div>
                </li>
                <li>
                    <div class="bullet green"></div>
                    <div class="time">12:00pm</div>
                    <div class="desc">
                        <h3>Developer Team</h3>
                        <h4>Hangouts</h4>
                        <ul class="list-unstyled team-info margin-0 p-t-5">                                            
                            <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>                                            
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="bullet green"></div>
                    <div class="time">2:00pm</div>
                    <div class="desc">
                        <h3>Responded to need</h3>
                        <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                    </div>
                </li>
                <li>
                    <div class="bullet orange"></div>
                    <div class="time">1:30pm</div>
                    <div class="desc">
                        <h3>Lunch Break</h3>
                    </div>
                </li>
                <li>
                    <div class="bullet green"></div>
                    <div class="time">2:38pm</div>
                    <div class="desc">
                        <h3>Finish</h3>
                        <h4>Go to Home</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div id="left-sidebar" class="sidebar ">
        <h5 class="brand-name"><img src="assets/images/SF-White.svg"></h5>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
            
                <li class="active"><a href="{{route('home')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li> 
                <!-- <li><a href="life-Sf.php"><i class="fa fa-calendar-check-o"></i><span>Life @ SF</span></a></li> -->
                <!-- <li><a href="documents.php"><i class="fa fa-folder"></i><span>Documents</span></a></li> -->
                <li><a href="{{route('task.index')}}"><i class="fa fa-check-square-o"></i><span>Todo List</span></a></li>
                <!-- <li><a href="#"><i class="fa fa-list-ul"></i><span>Forms</span></a></li> -->
                <!-- <li><a href="teammate.php"><i class="fa fa-user"></i><span>Teammates</span></a></li>    -->
                <!-- <li><a href="calender.php"><i class="fa fa-calendar"></i><span>Calendar</span></a></li> -->
                <!-- <li><a href="chat.php"><i class="fa fa-comments"></i><span>Chat</span></a></li> -->
                <!-- <li><a href="setting.php"><i class="fa fa-gear"></i><span>Setting</span></a></li> -->
            
                <li>
                    <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-lock"></i><span>Account</span></a>
                    <ul>
                        <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="forgot-password.html">Forgot password</a></li>
                        <li><a href="{{route('profile')}}">Profile</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </ul>
                </li>
            
            </ul>
        </nav>        
    </div>
</div>