<nav class="navbar navbar-expand-lg navbar-light border-bottom p-0">
    <div class="container p-0">
        <!-- Logo -->
        <!-- <a class="navbar-brand" href="{{ route('dashboard') }}">
            <x-application-logo class="h-9 w-auto" />
        </a> -->

        <!-- Toggle Button -->
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse p-0" id="navbarNav">
            <!-- User Dropdown -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="fw-semibold text-dark">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 rounded-3 p-2"
                        aria-labelledby="userDropdown">
                        <li>
                            <x-dropdown-link :href="route('profile.edit')" class="dropdown-item py-2 text-dark">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item py-2 text-danger fw-semibold" type="submit">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>