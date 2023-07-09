<header>
    <nav class="navbar navbar-expand navbar-light navbar-top">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
                </ul>
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{ auth()->user()->nama }}</h6>
                                @if (auth()->user()->role === 1)
                                <p class="mb-0 text-sm text-gray-600">Konselor Provinsi</p>
                                @elseif(auth()->user()->role === 2)
                                <p class="mb-0 text-sm text-gray-600">Konselor Kabupaten</p>
                                @else
                                <p class="mb-0 text-sm text-gray-600">Pelapor</p>
                                @endif
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    @if (auth()->user()->image)
                                    <img src="{{ asset('storage/'.auth()->user()->image) }}" />
                                    @else
                                    <img src="/assets/compiled/jpg/2.jpg" />
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                        style="min-width: 11rem">
                        <li>
                            <a class="dropdown-item" href="/"><i class="bi bi-house-door-fill me-2"></i>  Home</a>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button style="" class="dropdown-item"><i
                                        class="icon-mid bi bi-box-arrow-left me-2"></i>
                                    Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>