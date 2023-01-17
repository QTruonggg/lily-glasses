<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 box-1">
                <a href="" class="logo">
                    <img src="{{asset('assets/images/logo-footer.png')}}" alt="">
                </a>
                <p>Kính mắt SOLAR - Kính mắt bác sĩ</p>
                <p>Địa chỉ: <span>Số 16 LK10 Khu đô thị Văn Phú - Phú La - Hà Đông - Hà Nội</span></p>
                <p>Giờ mở cửa: <span>9.00 - 21.00</span></p>
                <p>Email: <span>kinhmat.solar@gmail.com</span></p>
                <p>Hotline: <span>0868.750.189</span></p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 box-2">
                <ul>
                    <p>Các chính sách:</p>
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
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 box-3">
                <ul>
                    <p>Sản phẩm:</p>
                    <li><a href="">Gọng kính</a></li>
                    <li><a href="">Tròng kính</a></li>
                    <li><a href="">Kính tiếp xúc</a></li>
                    <li><a href="">Phụ kiện</a></li>
                </ul>
                <a href="">Dịch vụ</a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 box-4">
                <div class="video-top">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/3lMnks3YPpM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="contact">
                    <p>Kết nốt với SOLAR:</p>
                    <a href=""><img src="{{asset('assets/images/fb.png')}}" alt=""></a>
                    <a href=""><img src="{{asset('assets/images/intergram.png')}}" alt=""></a>
                </div>
                <iframe width="100%" height="40%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d993.9958863081504!2d105.76413481793809!3d20.959363044443222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1673343494219!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


            </div>
        </div>
    </div>
</footer>