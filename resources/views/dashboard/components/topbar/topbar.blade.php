<div class="navbar-custom">
    <div class="topbar container-fluid">
        <div class="d-flex align-items-center gap-lg-2 gap-1">

            <!-- Topbar Brand Logo -->
            @include('dashboard.components.topbar.topbarBrandLogo')

            <!-- Sidebar Menu Toggle Button -->
            @include('dashboard.components.topbar.topbarToggle')

            <!-- Horizontal Menu Toggle Button -->
            @include('dashboard.components.topbar.horizontalToggle')

            <!-- Topbar Search Form -->
            @include('dashboard.components.topbar.topbarSearch')
        </div>

        <ul class="topbar-menu d-flex align-items-center gap-3">
            {{-- Recepient Search --}}
            @include('dashboard.components.topbar.recepientSearch')

            @include('dashboard.components.topbar.languageDropdown')

            @include('dashboard.components.topbar.notification')

            @include('dashboard.components.topbar.topbarSettings')

            @include('dashboard.components.topbar.themeMode')

            @include('dashboard.components.topbar.fullscreen')

            @include('dashboard.components.topbar.topbarAccount')
        </ul>
    </div>
</div>
