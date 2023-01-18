<section id="menu">
    <div class="header-menu-top">
        <div class="menu-top text-center">
            <ul>
                <li>
                    <h3>
                        <a href="{{route('introduce')}}">
                            Giới thiệu
                        </a>
                    </h3>
                </li>
                <li>
                    <h3>
                        <a href="#">
                            Sản phẩm
                        </a>
                    </h3>
                    <div class="sub-menu">
                        <ul class="sub-menu-list">
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
                        <a href="">
                            Dịch vụ
                        </a>
                    </h3>
                    <div class="sub-menu">
                        <ul class="sub-menu-list">
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
                        <a href="">
                            Góc chia sẻ
                        </a>
                    </h3>
                    <div class="sub-menu">
                        <ul class="sub-menu-list">
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
</section>