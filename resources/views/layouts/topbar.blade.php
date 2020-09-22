<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">


        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle"
                    src="data:image/png;base64,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">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    {{ __('Sair') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </li>

    </ul>

</nav>

<script src="{{ asset('js/sb-admin-2.js') }}"></script>
