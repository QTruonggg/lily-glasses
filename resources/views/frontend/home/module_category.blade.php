<section id="module-category">
    <div class="home-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <div class="cat-title">
                        <span>Danh mục sản phẩm</span>
                    </div>
                </div>
                @foreach($categories as $child)
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="cat-item">
                        <a href="{{route('showProduct',['slug'=>$child->slug])}}">
                            <img src="{{$child->thumbnail}}" alt="{{$child->name}}">
                        </a>
                        <div class="info">
                            <div class="title">
                                <a href="">{{$child->name}}</a>
                            </div>
                            <div class="more">
                                <a href="{{route('showProduct',['slug'=>$child->slug])}}">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</section>