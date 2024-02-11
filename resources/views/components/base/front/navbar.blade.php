<div class="bg-light text-dark border-bottom">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('./images/codeitnews.png') }}" alt="{{ config('app.name') }}" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link text-uppercase fs-6 fw-bold" aria-current="page"
                                    href="#">{{ $category->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</div>
</div>
