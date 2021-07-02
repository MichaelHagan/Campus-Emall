<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation" style="margin-bottom: 20px !important;">
        <li class="user-details indigo">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="{{ asset('user/images/profile.jpg') }}" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     logoutDialog();">
                                <i class="mdi-hardware-keyboard-tab"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{ auth()->user()->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
        </li>
        <li class="bold {{ Request::is('dashboard') ? 'active': '' }}"><a href="{{ route('dashboard') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
        </li>

        <li class="li-hover"><div class="divider"></div></li>
        <li class="li-hover"><p class="ultra-small margin more-text">Product and categories</p></li>
        <li class="bold {{ Request::is('product') ? 'active' : '' }}"><a href="{{ route('product') }}" class="waves-effect waves-cyan"><i class="fa fa-users"></i> create Product</a></li>
        <li class="bold {{ Request::is('category') ? 'active' : '' }}"><a href="{{ route('category') }}" class="waves-effect waves-cyan"><i class="fa fa-user-circle-o"></i> create category</a></li>
        {{--<li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="fa fa-user-md"></i> Doctor</a></li>--}}
        {{--<li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-action-account-child"></i> Nurse</a></li>--}}
        {{--<li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-action-account-child"></i> Pharmacist</a></li>--}}
        {{--<li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-action-account-child"></i> Examination Officer</a></li>--}}

        {{-- <li class="li-hover"><div class="divider"></div></li> --}}
        {{-- <li class="li-hover"><p class="ultra-small margin more-text">Registration Management</p></li> --}}
        {{-- <li class="bold {{ Request::is('registration') ? 'active': '' }}"><a href="{{ route('registration') }}" class="waves-effect waves-cyan"><i class="fa fa-users"></i> Registrations</a></li> --}}
        {{-- <li class="bold  {{ Request::is('complete') ? 'active': '' }}"><a href="{{ route('complete') }}" class="waves-effect waves-cyan"><i class="fa fa-plus-square-o"></i> Complete </a></li> --}}
        {{-- <li class="bold  {{ Request::is('incomplete') ? 'active': '' }}"><a href="{{ route('incomplete') }}" class="waves-effect waves-cyan"><i class="fa fa-minus-square-o"></i> Incomplete </a></li> --}}
        {{-- <li class="bold {{ Request::is('vital') ? 'active': '' }}"><a href="{{ route('vital') }}" class="waves-effect waves-cyan"><i class="fa fa-stethoscope"></i> Vitals </a></li> --}}
        {{-- <li class="bold {{ Request::is('consultation') ? 'active': '' }}"><a href="{{ route('consultation') }}" class="waves-effect waves-cyan"><i class="mdi-content-content-paste"></i> Consultation </a></li> --}}
        {{--<li class="bold {{ Request::is('vital') ? 'active': '' }}"><a href="#" class="waves-effect waves-cyan"><i class="fa fa-eyedropper"></i> Pharmacy </a></li>--}}
        {{-- <li class="bold {{ Request::is('examination') ? 'active': '' }}"><a href="{{ route('examination') }}" class="waves-effect waves-cyan"><i class="mdi-editor-attach-file"></i> Examination </a></li> --}}

        {{-- <li class="li-hover"><div class="divider"></div></li> --}}
        {{-- <li class="li-hover"><p class="ultra-small margin more-text">Schedule Management</p></li> --}}
        {{-- <li class="bold {{ Request::is('revisit') ? 'active': '' }}"><a href="{{ route('revisit') }}" class="waves-effect waves-cyan"><i class="fa fa-calendar-plus-o"></i> Re-Visits </a></li> --}}

        {{-- <li class="li-hover"><div class="divider"></div></li> --}}
        {{-- <li class="li-hover"><p class="ultra-small margin more-text">Data Management</p></li> --}}
        {{-- <li class="bold {{ Request::is('sponsorship') ? 'active' : '' }}"><a href="{{ route('sponsorship') }}" class="waves-effect waves-cyan"><i class="fa fa-tasks"></i> Sponsorships </a></li> --}}
        {{-- <li class="bold {{ Request::is('division') ? 'active' : '' }}"><a href="{{ route('division') }}" class="waves-effect waves-cyan"><i class="fa fa-superpowers"></i> Divisions </a></li> --}}
        {{-- <li class="bold {{ Request::is('rank') ? 'active' :'' }}"><a href="" class="waves-effect waves-cyan"><i class="fa fa-level-up"></i> Ranks </a></li> --}}
        {{-- <li class="bold {{ Request::is('specialist') ? 'active':'' }}"><a href="" class="waves-effect waves-cyan"><i class="fa fa-user-md"></i> Specialists </a></li> --}}
        {{-- <li class="bold {{ Request::is('mrs') ? 'active': '' }}"><a href="" class="waves-effect waves-cyan"><i class="fa fa-graduation-cap"></i> MRS Data </a></li> --}}
        {{-- <li class="bold {{ Request::is('node') ? 'active': '' }}"><a href="" class="waves-effect waves-cyan"><i class="fa fa-map-marker"></i> Node Data </a></li> --}}

        <li class="li-hover">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="sample-chart-wrapper">
                        <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                    </div>
                </div>
            </div>
        </li>

    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
</aside>