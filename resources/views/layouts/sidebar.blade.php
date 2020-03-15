<div class="scrollbar-sidebar ps ps--active-y">

    <div class="app-sidebar__inner">

        <ul class="vertical-nav-menu metismenu">
            @if(Auth::user()->user_type=='Admin' || Auth::user()->user_type=='Super Admin' )
            <li class="app-sidebar__heading">Users Section</li>
            <li>
                <a href="{{route('AddUser')}}" aria-expanded="true" class="@yield('AddUser')">
                    <i class="metismenu-icon pe-7s-add-user"></i>
                    Add User
                </a>
                <a href="{{route('UserList')}}" aria-expanded="true" class="@yield('UserList')">
                    <i class="metismenu-icon pe-7s-note2"></i>
                    User List
                </a>
            </li>
            <li class="app-sidebar__heading">Offer Section</li>
            <li>
                <a href="{{route('ProductList')}}" aria-expanded="true" class="@yield('ProductList')">
                    <!-- <a href="javascript:void(0)" aria-expanded="true" id="coming_soon"> -->
                    <i class="metismenu-icon pe-7s-note2"></i>
                    Offer List
                </a>
                <a href="{{route('ExpiredProductList')}}" aria-expanded="true" class="@yield('ExpiredProductList')">
                    <!-- <a href="javascript:void(0)" aria-expanded="true" id="coming_soon"> -->
                    <i class="metismenu-icon pe-7s-note2"></i>
                    Date Expired Offers
                </a>
            </li>
            <li class="app-sidebar__heading">About Us Section</li>
            <li>
                <a href="{{route('auth.about')}}" class="@yield('AboutUs') aria-expanded="true">
                    <i class="metismenu-icon pe-7s-news-paper"></i>
                    About Us Content
                </a>
            </li>

            @endif
        </ul>
    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>

    <div class="ps__rail-y" style="top: 0px; height: 196px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 35px;"></div>
    </div>

</div>



</div>