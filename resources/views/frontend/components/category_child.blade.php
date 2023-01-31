<section id="category_child">
    <div class="category">
        <div class="header-cat">
            <div class="cat-banner">
                <img src="">
            </div>
        </div>
        <div class="list-cat-child">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="type d-flex justify-content-center">
                            @foreach($pr_category as $category)
                                @foreach ($category->childs as $item)
                                    <li class="">
                                        <a href="{{route('showChildCategory',[$item->id,Str::slug($item->name)])}}">{{$item->name}}</a>
                                    </li>
                                @endforeach
                            @endforeach
                        </ul>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@pushonce('component-css')
<style>
.category {
    padding: 0px 0px 15px;
}
.cat-banner img {
    width:100%;
}
.list-cat-child {
    background-color: rgb(245, 245, 245);
    text-align: center;
    box-shadow: rgb(91 91 91 / 55%) 0px 0px 3px inset;
}
.list-cat-child ul {
    list-style: none;
    margin: 0px;
    padding: 0px;
}
.list-cat-child ul li {
    display: inline-block;
    padding: 10px 30px;
}
.list-cat-child ul li:hover {
    background-color: #ffd167;
}
.list-cat-child ul li:hover a {
    color: #fff;
}
.list-cat-child ul li a {
    position: relative;
    text-decoration: none;
    color: rgb(137, 137, 137);
}
.list-cat-child ul li.active a::before {
    bottom: -5px;
    content: "";
    width: 50%;
    height: 3px;
    background-color: rgb(249, 184, 70);
    position: absolute;
    left: 25%;
    border-radius: 10px;
}

@media (max-width:768px) {
    #category_child {
        display: none;
    }
}
</style>
@endpushonce