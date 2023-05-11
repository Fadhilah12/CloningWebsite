<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Clone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    @vite('resources/sass/app.scss')
</head>

<body>

    <!--navbar-->
    <nav class="navbar fixed-top navbar-expand-lg bg-purple" data-bs-theme="dark">
        <!--container-->
        <div class="container py-2 px-4">
            <!--navbar brand-->
            <a href="#" class="navbar-brand mb-0 h1">
                <img class="img-fluid" src="{{ Vite::asset('resources/images/logo-white.svg') }}" alt="logo" style="width: 40px;">
            </a>

            <!--navbar toggler-->
            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--offcanvas-->
            <div class="offcanvas offcanvas-end bg-purple" id="offcanvasNavbar">
                <!-- offcanvas Header  -->
                <div class="offcanvas-header pb-0 px-4">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Bootstrap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="close"></button>
                </div>

                <!--offcanvas body-->
                <div class="offcanvas-body pt-0 px-4">
                    <hr class="d-md-none text-white-50"> <!--horizontal line-->

                    <!--top menu-->
                    <ul class="navbar-nav flex-row flex-wrap">
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link active text-white">Docs</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link text-white">Examples</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link text-white">Icons</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link text-white">Themes</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link text-white">Blog</a></li>
                    </ul>

                    <hr class="d-md-none text-white-50"> <!--horizontal line-->

                    <!--sosial media-->
                    <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                        <li class="nav-item col-6 col-md-auto">
                            <a href="#" class="nav-link active">
                                <svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                  </svg><small class="ms-2 d-md-none">Github</small>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-md-auto">
                            <a href="#" class="nav-link active">
                                <svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                  </svg><small class="ms-2 d-md-none">Twitter</small>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-md-auto">
                            <a href="#" class="nav-link active">
                                <svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-slack" viewBox="0 0 16 16">
                                    <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                                  </svg><small class="ms-2 d-md-none">Slack</small>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-auto">
                            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                            <hr class="d-lg-none my-2 text-white-50">
                        </li>
                            <!--dropdown-->
                            <div class="dropdown" data-bs-theme="light">
                                <button type="button" class="btn nav-link text-white dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="d-lg-none">Bootstrap</span> v5.3
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <h6 class="dropdown-header">v5 release</h6>
                                    </li>
                                    <li><button class="dropdown-item activr bg-purple" type="button"><small>Latest
                                                (5.3.x) <i class="bi-check"></i></small></button></li>
                                    <li><button class="dropdown-item" type="button"><small>v5.2.3</small></button></li>
                                    <li><button class="dropdown-item" type="button"><small>v5.1.3</small></button></li>
                                    <li><button class="dropdown-item" type="button"><small>v5.0.2</small></button></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <h6 class="dropdown-header">Previous releases</h6>
                                    </li>
                                    <li><button class="dropdown-item" type="button"><small>v4.6.x</small></button></li>
                                    <li><button class="dropdown-item" type="button"><small>v3.4.1</small></button></li>
                                    <li><button class="dropdown-item" type="button"><small>v2.3.2</small></button></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><button class="dropdown-item" type="button"><small>All versions</small></button>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item col-12 col-lg-auto">
                            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                            <hr class="d-lg-none my-2 text-white-50">
                        </li>
                        <li class="nav-item">
                            <!--dropdown-->
                            <div class="dropdown" data-bs-theme="light">
                                <button type="button" class="btn nav-link text-white dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi-brightness-high-fill"></i>
                                    <span class="d-lg-none">Toggle Theme</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><button class="dropdown-item active bg-purple" type="button"><small><i
                                                    class="bi-brightness-high-fill me-2"></i>light</small></button></li>
                                    <li><button class="dropdown-item" type="button"><small><i
                                                    class="bi-moon-stars-fill me-2"></i>dark</small></button></li>
                                    <li><button class="dropdown-item" type="button"><small><i
                                                    class="bi-circle-half-fill me-2"></i>Auto</small></button></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    <!-- main <section></section> -->
    <div class="bg-light mt-5" id="main">
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-md-5 order-md-2">
                    <img class="img-fluid" src="{{ Vite::asset('resources/images/main.svg') }}" alt="main logo">
                </div>
                <div class="col-md-7 order-md-1">
                    <h1 class="mt-4 display-3">Build fast, responsif sites with bootstrap</h1>
                    <p class="fs-5 mt-3">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                        world's most popular front-end open source toolkit, featuring Sass variables and mixins,
                        responsive grid system, extensive prebuilt components, and powerful javaScript plugins </p>
                    <div class="row">
                        <div class="d-flex flex-column flex-md-row">
                            <button type="button" class="btn bg-purple text-white btn-lg mb-3 me-md-3 px-4 py-3">Get
                                Started</button>
                            <button type="button" class="btn btn-outline-dark btn-lg mb-3 px-4 py-3">Download</button>
                        </div>
                    </div>
                    <div class="text-muted">
                        Currently <strong>v5.3.0-alpha2.</strong>.<a href="#">v4.6.x docs</a>.<a href="#">All
                            releases</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Bootsrap Icons-->
    <div id="bs-icons">
        <!--Container-->
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <i class="bi bi-subtract fs-2 bg-warning py-2 px-3 rounded-3 text-white"></i>
                    </div>
                    <h2 class="display-5 mb-3">Personalize it with <br />bootstrap Icons</h2>
                    <p class="fs-5"><a href="#">Bootstrap Icons</a> is an open source SVG
                        icon library featuring over 1,800 glyphs, with more added every release.
                        They're designed to work in any project, whether you use Bootstrap itself or not.
                        Use them as SVGs or icon fonts--both options give you vector scaling and easy customization via
                        CSS</p>
                    <a class="icon-link icon-link-hover lead fw-semibold mb-5" href="#">
                        Get Bootstrap Icons
                        <i class="bi bi-arrow-right mb-2"></i>
                    </a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ Vite::asset('resources/images/bs-icons.png') }}" alt="bootstrap-icons">
                </div>
            </div>
        </div>
        <!--Bootstrap Official Themes-->
        <div id="bs-themes">
            <!--Container-->
            <div class="container py-5 px-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3 mt-5">
                            <i class="bi bi-droplet-fill fs-2 bg-info py-2 px-3 rounded-3 text-white"></i>
                        </div>
                        <h2 class="display-5"> Make it yours with official Bootstrap Themes</h2>
                        <p class="fs-5">Take Bootstrap to the next level with premium themes from the
                            <a href="#"> official Bootstrap Themes Marketplace</a>. Themes are built on Bootstrap as
                            their
                            own extended frameworks, rich with new components and plugins, documentation, and powerful
                            build tools.
                        </p>
                        <a class="icon-link icon-link-hover lead fw-semibold mb-5" href="#">
                            Browse Bootstrap Themes
                            <i class="bi bi-arrow-right mb-2"></i>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="{{ Vite::asset('resources/images/bs-themes.png') }}" alt="bootstrap-themes">
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="bg-light mt-5" id="main">
            <div class="container py-5 px-4">
                <div class="row">
                    <div class="col-lg-3 mb-5">
                        <a href="" class="logo text-decoration-none">
                            <div class="d-flex">
                                <img class="img-fluid" src="{{ Vite::asset('resources/images/logo-black.svg') }}" alt="bootstrap-themes" style="width: 40px;">
                                <div class="fs-5 ms-2 text-black">Bootstrap</div>
                            </div>
                        </a>
                        <div class="mt-2 text-muted">
                            <small>Designed and built with all the love in world by the <a href="">Bootstrap Team</a>
                                with the help of <a href="" class="text-black">our contributors</a></small>
                        </div>
                        <div class="mt-2 text-muted">
                            <small>Code licensed <a href="" class="text-black">MIT</a> docs <a href=""
                                    class="text-black">CC BY 3.0.</a></small>
                        </div>
                        <div class="mt-2 text-muted">
                            <small>Currently v5.3.0-alpha2.</small>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 offset-lg-1 mb-5">
                        <h5>Links</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="">Home</a></li>
                            <li class="mb-2"><a href="">Docs</a></li>
                            <li class="mb-2"><a href="">Examples</a></li>
                            <li class="mb-2"><a href="">Icons</a></li>
                            <li class="mb-2"><a href="">Themes</a></li>
                            <li class="mb-2"><a href="">Blog</a></li>
                            <li class="mb-2"><a href="">Swag Store</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 offset-lg mb-5">
                        <h5>Guides</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="">Getting Started</a></li>
                            <li class="mb-2"><a href="">Starter Template</a></li>
                            <li class="mb-2"><a href="">Webpack</a></li>
                            <li class="mb-2"><a href="">Parcel</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 offset-lg mb-5">
                        <h5>Projects</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="">bootstrap 5</a></li>
                            <li class="mb-2"><a href="">bootstrap 4</a></li>
                            <li class="mb-2"><a href="">Icons</a></li>
                            <li class="mb-2"><a href="">RFS</a></li>
                            <li class="mb-2"><a href="">NPM Starter</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 offset-lg mb-5">
                        <h5>Community</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="">Issues</a></li>
                            <li class="mb-2"><a href="">Discussions</a></li>
                            <li class="mb-2"><a href="">Corporate Sponsors</a></li>
                            <li class="mb-2"><a href="">Open Collection</a></li>
                            <li class="mb-2"><a href="">Slack</a></li>
                            <li class="mb-2"><a href="">Stack Overflow</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script> --}}
        @vite('resources/js/app.js')
    </body>

</html>
