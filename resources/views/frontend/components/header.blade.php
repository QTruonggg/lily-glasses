<section id="header">
    <header class="main-header-mobile d-none">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="mobile-sidebar">
                        <a class="" data-bs-toggle="offcanvas" href="#mb-menu-sidebar" role="button" aria-controls="mb-menu-sidebar">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="mb-menu-sidebar" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="mb-sidebar-list">
                                <li>
                                    <ul class="mb-sidebar-list-child">
                                        <li>

                                        </li>
                                    </ul>
                                </li>
                            </ul>
                                
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    asdfda
                </div>
                <div class="col-2">
                    asdf
                </div>
                <div class="col-2">
                    asdf
                </div>
            </div>
        </div>
    </header>
    <header class="main-header-pc">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex align-items-center">
                        <a href="{{route('showhome')}}" class="logo">
                            <img src="{{asset('assets/images/logo.png')}}" alt="">
                        </a>
                        <div class="slogan">
                            <i>"Vison for future"</i>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex align-items-center justify-content-end">
                        <div class="action ">
                            <div class="dropdown">
                                <div class="" data-bs-toggle="dropdown" aria-expanded="true">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="dropdown-menu">
                                    <input type="search" placeholder="Tìm kiếm .. ">
                                </div>
                            </div>
                            <a href="{{route('showCartList')}}" class="shopping-cart">
                                <i class="fa-solid fa-bag-shopping"></i>
                                <span class="count">{{Cart::count()}}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</section>
@include('frontend.components.category')