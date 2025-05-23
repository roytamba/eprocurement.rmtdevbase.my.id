<li class="dropdown">
    <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <span class="account-user-avatar">
            <img src="{{ asset('admin/images/users/avatar-1.jpg') }}" alt="user-image" width="32" class="rounded-circle">
        </span>
        <span class="d-lg-flex flex-column gap-1 d-none">
            <h5 class="my-0">{{ Auth::user()->name }}</h5>
            <h6 class="my-0 fw-normal">Founder</h6>
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
        <!-- item -->
        <div class="dropdown-header noti-title">
            <h6 class="text-overflow m-0">Welcome!</h6>
        </div>

        <!-- item -->
        <a href="#" class="dropdown-item">
            <i class="mdi mdi-account-circle me-1"></i>
            <span>My Account</span>
        </a>

        <!-- item -->
        <a href="#" class="dropdown-item">
            <i class="mdi mdi-account-edit me-1"></i>
            <span>Settings</span>
        </a>

        <!-- item -->
        <a href="#" class="dropdown-item">
            <i class="mdi mdi-lifebuoy me-1"></i>
            <span>Support</span>
        </a>

        <!-- item -->
        <a href="#" class="dropdown-item">
            <i class="mdi mdi-lock-outline me-1"></i>
            <span>Lock Screen</span>
        </a>

        <!-- Logout -->
        <a href="#" class="dropdown-item"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="mdi mdi-logout me-1"></i>
            <span>Logout</span>
        </a>

        <!-- Hidden Logout Form -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>