<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 box-1">
                {{-- <a href="" class="logo">
                    <img src="{{asset('assets/images/logo-footer.png')}}" alt="">
                </a> --}}
                    <a href="" class="logo">
                        <img src="{{ $profile->logo }}" alt="" style="margin-left: -20px;
    margin-bottom: 20px;">
                    </a>
                    <p>{{ $profile->name }}</p>
                    <p>Địa chỉ: <span>{{ $profile->address}}</span></p>
                    <p>Giờ mở cửa: <span>{{ $profile->time}}</span></p>
                    <p>Email: <span>{{ $profile->email}}</span></p>
                    <p>Hotline: <span>{{ $profile->hotline}}</span></p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 box-2">
                <ul>
                    <p>Các chính sách</p>
                    @foreach($policy as $policy)
                    <li><a href="{{route('policyDetail',[$policy->id,Str::slug($policy->name)])}}">{{$policy->name}}</a></li>
                    @endforeach
                    
                </ul>
                <ul>
                    <p>Góc chia sẻ</p>
                    @foreach($shared_footer as $share)
                    
                    <li><a href="{{route('sharedDetail',[$share->id,Str::slug($share->name)])}}">{{$share->name}}</a></li>
                    @endforeach
                    
                </ul>
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
                <ul>
                    <p>Dịch vụ</p>
                    @foreach($service_footer as $service)
                        <li>
                            <a href="{{route('serviceDetail',[$service->id,Str::slug($service->name)] )}}">{{$service->name}}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 box-4">
                <div class="video-top" >
                    <iframe width="100%" height="100%" src="{{ $profile->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                
                </div>
                <div class="contact">
                    <p>Kết nốt với SOLAR:</p>
                    <a href="{{$profile->network_fb}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('assets/images/fb.png')}}" alt=""></a>
                    <a href="{{$profile->network_ins}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('assets/images/intergram.png')}}" alt=""></a>
                    <a href="{{$profile->network_fb}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('assets/images/tiktok.png')}}" alt=""></a>
                    <a href="{{$profile->network_fb}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('assets/images/shopee.png')}}" alt=""></a>
                </div>
                <iframe width="100%" height="40%" src="{{$profile->google_map}}" style="border:0;"></iframe>
            </div>
        </div>
    </div>
    <div style="background-color: #dbdbdb; text-align: center; padding: 5px"><span>Designed By </span> <a href="https://ommanisoft.com/?fbclid=IwAR3CUUEkifh-pcEmwQ1l-4YuMnvcPcj5zkvVpdr7WE76hjEduwhcJXs1SXg" target="_blank" style="text-decoration: none; font-weight: 700"> Ommanisoft</a></div>
</footer>