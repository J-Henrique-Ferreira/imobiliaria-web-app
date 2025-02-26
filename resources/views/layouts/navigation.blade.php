<nav class="navbar navbar-expand-lg navbar-light p-0">
    <div class="container p-0">
        <div class="collapse navbar-collapse p-0" id="navbarNav">
            <!-- User Dropdown -->
            <ul class="navbar-nav">
                <div class="nav-item dropdown">
                    <a class="nav-link d-flex align-items-center" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="fs-6 text-dark">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu w-100 shadow border-0 rounded-3 p-2" aria-labelledby="userDropdown">
                        <li>
                            <x-dropdown-link :href="route('profile.edit')" target="blank"
                                class="dropdown-item text-dark" style="margin-left: -8px">
                                {{ __('Profile') }}
                            </x-dropdown-link>
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
                </div>
            </ul>
        </div>
    </div>
</nav>