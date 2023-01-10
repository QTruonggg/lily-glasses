<section id="menu">
    <div class="header-menu-top">
        <div class="menu-top">
            <ul>
                <li>
                    <h3>
                        <a href="">
                            Giới thiệu
                        </a>
                    </h3>
                </li>
                <li>
                    <h3>
                        <a href="">
                            Sản phẩm
                        </a>
                    </h3>
                    <div class="sub-menu">
                        <ul class="sub-menu-list">
                            @foreach($categories as $category)
                                <li class="item">
                                    <h2>
                                        <a href="">{{$category->name}}</a>
                                    </h2>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li>
                    <h3>
                        <a href="">
                            Dịch vụ
                        </a>
                    </h3>
                    <div class="sub-menu">
                        <ul class="sub-menu-list">
                            @foreach($categories as $category)
                                @foreach($category->childs as $child)
                                    <li class="item">
                                        <h2>
                                            <a href="">{{$child->name}}</a>
                                        </h2>
                                    </li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li>
                    <h3>
                        <a href="">
                            Sản phẩm
                        </a>
                    </h3>
                    <div class="sub-menu">
                        <ul class="sub-menu-list">
                            @foreach($categories as $category)
                                <li class="item">
                                    <h2>
                                        <a href="">{{$category->name}}</a>
                                    </h2>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li>
                    <h3>
                        <a href="">
                            Sản phẩm
                        </a>
                    </h3>
                    <div class="sub-menu">
                        <ul class="sub-menu-list">
                            @foreach($categories as $category)
                                <li class="item">
                                    <h2>
                                        <a href="">{{$category->name}}</a>
                                    </h2>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>