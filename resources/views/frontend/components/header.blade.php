<section id="header">
    <header class="main-header-mobile">
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
                            <ul class="mb-sidebar-list-child">
                            <li>
                                <h3>
                                    <a href="{{route('introduce')}}">
                                        Giới thiệu
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a data-bs-toggle="collapse" href="#category_product" role="button" aria-expanded="false" aria-controls="category_product">
                                        Sản phẩm
                                    </a>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </h3>
                                <div class="sub-menu" >
                                    <ul class="sub-menu-list collapse"  id="category_product">
                                        @foreach($categories as $category)
                                            <li class="item">
                                                <h2>
                                                    <a href="{{route('showProduct', ['slug'=>$category->slug])}}">{{$category->name}}</a>
                                                </h2>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <h3>
                                    <a data-bs-toggle="collapse" href="#service" role="button" aria-expanded="false" aria-controls="service">
                                        Dịch vụ
                                    </a>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </h3>
                                <div class="sub-menu">
                                    <ul class="sub-menu-list collapse"  id="service">
                                        @foreach($serviceCategory as $child)
                                            <li class="item">
                                                <h2>
                                                    <a href="{{route('serviceDetail',$child->id)}}">{{$child->name}}</a>
                                                </h2>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <h3>
                                    <a data-bs-toggle="collapse" href="#share" role="button" aria-expanded="false" aria-controls="share">
                                        Góc chia sẻ
                                    </a>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </h3>
                                <div class="sub-menu">
                                    <ul class="sub-menu-list collapse" id="share">
                                        @foreach($shared as $shared)
                                            <li class="item">
                                                <h2>
                                                    <a href="{{route('sharedDetail',$shared->id)}}">{{$shared->name}}</a>
                                                </h2>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <h3>
                                    <a href="{{route('showFormBook')}}">
                                        Đặt lịch khám 
                                    </a>
                                </h3>
                            </li>
                            </ul>
                                
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex align-items-center">
                    <a href="{{route('showhome')}}" class="logo">
                        <img src="{{asset('assets/images/logo.png')}}" alt="">
                    </a>
                    <div class="slogan">
                        <i>"Vison for future"</i>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <a href="{{route('showCartList')}}" class="shopping-cart">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <span class="count">{{Cart::count()}}</span>
                    </a>
                </div>
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <div class="dropdown">
                        <div class="" data-bs-toggle="dropdown" aria-expanded="true">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <div class="dropdown-menu">
                            <input type="search" placeholder="Tìm kiếm .. ">
                        </div>
                    </div>
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