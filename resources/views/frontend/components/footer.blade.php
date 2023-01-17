<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 box-1">
                {{-- <a href="" class="logo">
                    <img src="{{asset('assets/images/logo-footer.png')}}" alt="">
                </a>
                <p>Kính mắt SOLAR - Kính mắt bác sĩ</p>
                <p>Địa chỉ: <span>Số 16 LK10 Khu đô thị Văn Phú - Phú La - Hà Đông - Hà Nội</span></p>
                <p>Giờ mở cửa: <span>9.00 - 21.00</span></p>
                <p>Email: <span>kinhmat.solar@gmail.com</span></p>
                <p>Hotline: <span>0868.750.189</span></p> --}}
                @foreach($profile as $profile)
                    <a href="" class="logo">
                        <img src="{{ $profile->logo }}" alt="">
                    </a>
                    <p>{{ $profile->title }}</p>
                    <p>Địa chỉ: <span>{{ $profile->address}}</span></p>
                    <p>Giờ mở cửa: <span>{{ $profile->time}}</span></p>
                    <p>Email: <span>{{ $profile->email}}</span></p>
                    <p>Hotline: <span>{{ $profile->hotline}}</span></p>
                @endforeach
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 box-2">
                <ul>
                    <p>Các chính sách</p>
                    {{-- <li><a href="">Bảo hành</a></li>
                    <li><a href="">Đổi trả</a></li>
                    <li><a href="">Vận chuyển</a></li>
                    <li><a href="">Thu cũ - Đổi mới</a></li> --}}
                    @foreach($blog as $blog)
                    <li><a href="">{{$blog->name}}</a></li>
                    @endforeach
                    
                </ul>
                <a href="">Góc chia sẻ</a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 box-3">
                <ul>
                    <p>Sản phẩm</p>
                    {{-- <li><a href="">Gọng kính</a></li>
                    <li><a href="">Tròng kính</a></li>
                    <li><a href="">Kính tiếp xúc</a></li>
                    <li><a href="">Phụ kiện</a></li> --}}
                    @foreach($categories as $category)
                        <li>
                            <a href="{{route('showProduct', ['slug'=>$category->slug])}}">{{$category->name}}</a>
                        </li>
                    @endforeach

                </ul>
                <a href="">Dịch vụ</a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 box-4">
                @foreach($profile as $profile)
                <div class="video-top">
                    {{-- {{ $profile->video}} --}}
                </div>
                <div class="contact">
                    <p>Kết nốt với SOLAR:</p>
                    <a href=""><img src="{{asset('assets/images/fb.png')}}" alt=""></a>
                    <a href=""><img src="{{asset('assets/images/intergram.png')}}" alt=""></a>
                </div>
                {{-- {{$profile->google_map}} --}}
                @endforeach

            </div>
        </div>
    </div>
</footer>