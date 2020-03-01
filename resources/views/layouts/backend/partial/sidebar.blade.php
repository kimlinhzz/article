<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info text-center">
        <div class="image">
            {{-- <img src="{{ Storage::disk('public')->url('profile/'.Auth::user()->image) }}" width="48" height="48" alt="User" /> --}}
            <img src="{{ asset('assets/backend/images/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">

                    <li>
                        <a href="{{ Auth::user()->role->id == 1 ? route('admin.settings') : route('author.settings')}}"><i class="material-icons">settings</i>Settings</a>
                    </li>

                    <li role="seperator" class="divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i>Sign Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu bgNavigation">
        <ul class="list">
            <li class="header" style="background-color: #2E4053; color:lightGray">MAIN NAVIGATION</li>

            @if(Request::is('admin*'))
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons" style="color:white">dashboard</i>
                        <span style="color:whitesmoke">Dashboard</span>
                    </a>
                </li>
                {{-- <li class="{{ Request::is('admin/tag*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tag.index') }}">
                        <i class="material-icons">label</i>
                        <span style="color:lightGray">Tag</span>
                    </a>
                </li> --}}
                <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}">
                        <i class="material-icons" style="color:white">featured_play_list</i>
                        <span style="color:lightGray">Category</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/post*') ? 'active' : '' }}">
                    <a href="{{ route('admin.post.index') }}">
                        <i class="material-icons" style="color:white">library_books</i>
                        <span style="color:lightGray">Posts</span>
                    </a>
                </li>
                {{-- <li class="{{ Request::is('admin/pending/post') ? 'active' : '' }}">
                    <a href="{{ route('admin.post.pending') }}">
                        <i class="material-icons">library_books</i>
                        <span style="color:lightGray">Pending Posts</span>
                    </a>
                </li> --}}
                <li class="{{ Request::is('admin/favorite') ? 'active' : '' }}">
                    <a href="{{ route('admin.favorite.index') }}">
                        <i class="material-icons" style="color:white">favorite</i>
                        <span style="color:lightGray">Favorite Posts</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/comments') ? 'active' : '' }}">
                    <a href="{{ route('admin.comment.index') }}">
                        <i class="material-icons" style="color:white">comment</i>
                        <span style="color:lightGray">Comments</span>
                    </a>
                </li>
                {{-- <li class="{{ Request::is('admin/authors') ? 'active' : '' }}">
                    <a href="{{ route('admin.author.index') }}">
                        <i class="material-icons">account_circle</i>
                        <span style="color:lightGray">Authors</span>
                    </a>
                </li> --}}
                {{-- <li class="{{ Request::is('admin/subscriber') ? 'active' : '' }}">
                    <a href="{{ route('admin.subscriber.index') }}">
                        <i class="material-icons">subscriptions</i>
                        <span style="color:lightGray">Subscribers</span>
                    </a>
                </li> --}}
                {{-- <li class="header">System</li> --}}

                <li class="{{ Request::is('admin/settings') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings') }}">
                        {{-- <i class="material-icons" style="color:white">settings</i> --}}
                        <i class="material-icons" style="color:white">edit</i>
                        <span style="color:lightGray">Edit Profile</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons" style="color:white">input</i>
                        <span style="color:lightGray">Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endif
            @if(Request::is('author*'))
                <li class="{{ Request::is('author/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('author.dashboard') }}">
                        <i class="material-icons" style="color:white">dashboard</i>
                        <span style="color:lightGray">Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::is('author/post*') ? 'active' : '' }}">
                    <a href="{{ route('author.post.index') }}">
                        <i class="material-icons" style="color:white">library_books</i>
                        <span style="color:lightGray">Posts</span>
                    </a>
                </li>
                <li class="{{ Request::is('author/favorite') ? 'active' : '' }}">
                    <a href="{{ route('author.favorite.index') }}">
                        <i class="material-icons" style="color:white">favorite</i>
                        <span style="color:lightGray">Favorite Posts</span>
                    </a>
                </li>

                <li class="{{ Request::is('author/comments') ? 'active' : '' }}">
                    <a href="{{ route('author.comment.index') }}">
                        <i class="material-icons" style="color:white">comment</i>
                        <span style="color:lightGray">Comments</span>
                    </a>
                </li>

                <li class="{{ Request::is('author/settings') ? 'active' : '' }}">
                    <a href="{{ route('author.settings') }}">
                        <i class="material-icons" style="color:white">edit</i>
                        <span style="color:lightGray">Edit Profile</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons" style="color:white">input</i>
                        <span style="color:lightGray">Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endif

        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal bgNavigation">
        <div class="copyright" style="color:white">
            &copy; 2019 - {{ date("Y") }} All rights reserved. <br>
            <strong> Developed &amp; <i class="far fa-heart"></i> by </strong>
                        <a href="https://www.youtube.com/channel/UCwbVAlvrsD2Tpx93bleNbOA" target="_blank">Group Assignment Web</a>.
        </div>
        <div class="version" style="color:whitesmoke">
            <b>Version: </b> 1.0.1
        </div>
    </div>
    <!-- #Footer -->
</aside>


<style>
    .bgNavigation {
        background-color: #212F3C !important;
    }
    .toggled {
        background-color: #2db395 !important;
    }

    a > span {
        color: whitesmoke !important;
    }

</style>