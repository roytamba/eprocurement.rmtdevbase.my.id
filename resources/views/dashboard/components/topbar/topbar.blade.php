<div class="navbar-custom">
    <div class="topbar container-fluid">
        <div class="d-flex align-items-center gap-lg-2 gap-1">

            <!-- Topbar Brand Logo -->
            @include('dashboard.components.topbar.topbarBrandLogo')

            <!-- Sidebar Menu Toggle Button -->
            @include('dashboard.components.topbar.topbarToggle')

            <!-- Horizontal Menu Toggle Button -->
            @include('dashboard.components.topbar.topbarHorizontalToggle')

            <!-- Topbar Search Form -->
            @include('dashboard.components.topbar.topbarSearch')
        </div>

        <ul class="topbar-menu d-flex align-items-center gap-3">
            {{-- Recepient Search --}}
            @include('dashboard.components.topbar.topbarRecepientSearch')

            @include('dashboard.components.topbar.topbarLanguageDropdown')

            @include('dashboard.components.topbar.topbarNotification')

            @include('dashboard.components.topbar.topbarSettings')

            @include('dashboard.components.topbar.topbarThemeMode')

            @include('dashboard.components.topbar.topbarFullscreen')

            @include('dashboard.components.topbar.topbarAccount')
        </ul>
    </div>
</div>
