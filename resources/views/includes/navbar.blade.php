<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container col-12 col-md-11 my-2">
        <div class="d-flex flex-row">
            <button class="hamburger mr-2" id="hamburger" aria-label="Toggle navigation">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            </button>

            <div class="navbar-brand">
                <b>Gawai</b>store
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <button class="hamburger" aria-label="Toggle navigation">
                <a href="#"><i class="fas fa-shopping-cart text-white fs-20"></i></a>
            </button>

            <button class="hamburger" id="search" aria-label="Toggle navigation">
                <i class="fas fa-search text-white fs-20"></i>
            </button>
        </div>
        
        <div class="navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto list-unstyled">
                <li class="nav-item mr-4 ml-2">
                    <div class="nav-link text-white">Kategori</div>
                </li>
                <li class="nav-item">
                    <form class="form-inline has-search mobile-hidden">
                        <input class="form-control" type="search" placeholder="Cari hp mu" aria-label="Search">
                        <button class="btn btn-default btn-search" type="submit"><i class="fas fa-search text-danger"></i></button>
                    </form>
                </li>
            </ul>
            <a href="#" class="btn btn-outline-light mx-2 px-4 my-sm-0 bold">Log in</a>
        </div>

        <div class="search-collapse desktop-hidden">
            <form class="d-flex p-2 has-search">
                <input class="form-control" type="search" placeholder="Cari batagor enak" aria-label="Search">
                <button class="btn btn-default btn-search" type="submit"><i class="fas fa-search text-danger"></i></button>
            </form>
        </div>
    </div>
</nav>