<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Larablog</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form action="" method="POST" class="d-blok w-100">
        <input class="form-control form-control-dark" type="text" placeholder="Search My Posts" />
    </form>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="POST">
                @csrf

                <button type="submit" class="btn btn-dark w-100">
                    Logout&nbsp;
                    <span data-feather="log-out"></span>
                </button>
            </form>
        </div>
    </div>
</header>
