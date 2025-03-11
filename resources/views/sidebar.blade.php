 <!-- Sidebar -->
 <div class="col-md-3">
    <div class="sidebar p-3">
        <ul class="nav flex-column">
            <li class="nav-item mb-3">
                <a href="{{url('/my-ads')}}" class="nav-link {{ request()->routeIs('my_ads') ? 'active' : '' }}"><strong>📦 My Listing</strong></a>
            </li>
            {{-- <li class="nav-item mb-3">
                <a href="#" class="nav-link {{ request()->routeIs('hello_coins') ? 'active' : '' }}">💰 Hello Coins (0)</a>
            </li> --}}
            <li class="nav-item mb-3">
                <a href="{{url('account')}}" class="nav-link {{ request()->routeIs('account') ? 'active' : '' }}">👤 Account</a>
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a href="{{route('account')}}" class="nav-link text-danger {{ request()->routeIs('profile_info') ? 'active' : '' }}">Profile Info</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item mb-3">
                <a href="{{route('settings')}}" class="nav-link {{ request()->routeIs('settings') ? 'active' : '' }}">⚙️ Settings</a>
            </li>
            {{-- <li class="nav-item mb-3">
                <a href="#" class="nav-link d-flex align-items-center {{ request()->routeIs('pro') ? 'active' : '' }}">📶 Pro <button class="btn btn-danger btn-sm ms-2">Upgrade</button></a>
            </li> --}}
        </ul>
    </div>
</div>