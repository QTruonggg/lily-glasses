<section id="self_introduce">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="cat-title" style="
                        text-align: center;
                        font-size: 26px;
                        text-transform: uppercase;
                        padding: 30px 40px 30px 40px;
                    ">
                    <span style="
                        color: #EBD7A9;
                        font-size: 30px;
                        font-weight: 700;
                        text-transform: uppercase;
                    ">
                    {{$title}}
                    </span>
                </div>
            </div>
            @foreach ($data as $data)
                <div class="col-md-12 col-sm-12 col-12">
                    <h1 class="header">{{$data->name}}</h1>
                    <div class="title" style=" color:#999;">
                        {{$data->seo_title}}
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-12">
                    {!! $data->seo_description !!}
                </div>

            @endforeach
        </div>
    </div>
</section>