<!-- Responsive Navigation Trigger -->
<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

<div class="dashboard-sticky-nav">
    <div class="content-left pull-left">
        <a href="{{ route("admin.dashboard") }}"><img src="{{ asset("img/modabidz-logo.jpeg") }}" alt="logo"></a>
    </div>
    <div class="content-right pull-right">
        <div class="search-bar">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="search" placeholder="Search Now">
                    <a href="#"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                </div>
            </form>
        </div>
        <div class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <div class="profile-sec">
                    <div class="dash-image">
                        <img src="{{ asset("admin/images/comment.jpg") }}" alt="">
                    </div>
                    <div class="dash-content">
                        <h4>{{ \Illuminate\Support\Facades\Auth::user()->name }}</h4>
{{--                        <span>Post Manager</span>--}}
                    </div>
                </div>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route("admin.setting.create") }}"><i class="sl sl-icon-settings"></i>Settings</a></li>
                <li><a href="#"><i class="sl sl-icon-user"></i>Profile</a></li>
                <li><a href="#"><i class="sl sl-icon-lock"></i>Change Password</a></li>
                <li><a href="{{ route('logout') }}" role="button" title="{{ __("Déconnexion") }}"
                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <i class="sl sl-icon-power"></i>Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </ul>
        </div>
        <div class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <div class="dropdown-item">
                    <i class="sl sl-icon-envelope-open"></i>
                    <span class="notify">3</span>
                </div>
            </a>
            <div class="dropdown-menu notification-menu">
                <h4> 23 Messages</h4>
                <ul>
                    <li>
                        <a href="#">
                            <div class="notification-item">
                                <div class="notification-image">
                                    <img src="{{ asset("admin/images/comment.jpg") }}" alt="">
                                </div>
                                <div class="notification-content">
                                    <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="notification-item">
                                <div class="notification-image">
                                    <img src="{{ asset("admin/images/comment.jpg") }}" alt="">
                                </div>
                                <div class="notification-content">
                                    <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="notification-item">
                                <div class="notification-image">
                                    <img src="{{ asset("admin/images/comment.jpg") }}" alt="">
                                </div>
                                <div class="notification-content">
                                    <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <p class="all-noti"><a href="#">See all messages</a></p>
            </div>
        </div>
        <div class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <div class="dropdown-item">
                    <i class="sl sl-icon-bell"></i>
                    <span class="notify">{{ sizeof($notifications) }}</span>
                </div>
            </a>
            <div class="dropdown-menu notification-menu">
                <h4>{{ sizeof($notifications) }} @lang("Réservation(s)")</h4>
                <ul>
                    @foreach($recentNotifications as $notification)
                        <li>
                            <a href="{{ route("admin.residence.reservation.index.one", $notification->id) }}">
                                <div class="notification-item">
                                    <div class="notification-image">
                                        <img src="{{ asset("admin/images/comment.jpg") }}" alt="">
                                    </div>
                                    <div class="notification-content">
                                        <p>@lang("Nouvelle réservation.")</p><span class="notification-time">{{ $notification->getHours() }}</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <p class="all-noti"><a href="{{ route("admin.residence.reservation.index") }}">@lang("Voir toutes les réservations")</a></p>
            </div>
        </div>
    </div>
</div>
