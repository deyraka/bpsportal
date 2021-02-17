<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('/images/logo.png')}}" alt="BPS Logo" class="brand-image">
        <span class="logo-lg">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url('/')}}" class="nav-link">
                        <i class="nav-icon fas fa-chevron-left"></i><p>Dasboard</p>
                    </a>
                </li>
                <li class="nav-header"><i class="fas fa-id-card"></i> Penugasan Anda</li>
                <li class="nav-item">
                    <a href="{{url('/keuangan')}}" class="nav-link {{ (request()->is('keuangan')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i><p>Perjadin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('#')}}" class="nav-link {{ (request()->is('meeting')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i><p>Meeting</p>
                    </a>
                </li>
                <li class="nav-header"><i class="fas fa-id-card"></i> Pengajuan</li>
                <li class="nav-item">
                    <a href="{{route('formjln')}}" class="nav-link {{ (request()->routeIs('formjln')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i><p>Form JLN</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i><p>Form BHN</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i><p>Paket Meeting</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i><p>Status</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
