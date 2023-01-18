<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 box-1">
                {{-- <a href="" class="logo">
                    <img src="{{asset('assets/images/logo-footer.png')}}" alt="">
                </a> --}}
              
                @foreach($profile as $profile)
                    <a href="" class="logo">
                        <img src="{{ $profile->logo }}" alt="">
                    </a>
                    <p>{{ $profile->name }}</p>
                    <p>Địa chỉ: <span>{{ $profile->address}}</span></p>
                    <p>Giờ mở cửa: <span>{{ $profile->time}}</span></p>
                    <p>Email: <span>{{ $profile->email}}</span></p>
                    <p>Hotline: <span>{{ $profile->hotline}}</span></p>
                @endforeach
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 box-2">
                <ul>
                    <p>Các chính sách</p>
                    @foreach($policy as $policy)
                    <li><a href="{{route('policyDetail',$policy->id)}}">{{$policy->name}}</a></li>
                    @endforeach
                    
                </ul>
                <a href="">Góc chia sẻ</a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 box-3">
                <ul>
                    <p>Sản phẩm</p>
                    @foreach($categories as $category)
                        <li>
                            <a href="{{route('showProduct', ['slug'=>$category->slug])}}">{{$category->name}}</a>
                        </li>
                    @endforeach

                </ul>
                <a href="">Dịch vụ</a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 box-4">
                <div class="video-top" >
                    <iframe width="100%" height="100%" src="{{ $profile->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                
                </div>
                <div class="contact">
                    <p>Kết nốt với SOLAR:</p>
                    <a href="{{$profile->network_fb}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('assets/images/fb.png')}}" alt=""></a>
                    <a href="{{$profile->network_ins}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('assets/images/intergram.png')}}" alt=""></a>
                </div>
                <iframe width="100%" height="40%" src="{{$profile->google_map}}" style="border:0;"></iframe>
            </div>
        </div>
    </div>
</footer>