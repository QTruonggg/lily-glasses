<section id="form_link">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="form-newsletter">
                    <ul class="social">
                        <li>
                            <p>
                                <strong>Follow chúng mình để cập nhật mẫu kính mới nhất nha </strong>
                            </p>
                        </li>
                        <li>
                            <a href="" target="_blank">
                                <img src="{{asset('assets/images/fb.png')}}">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="{{asset('assets/images/instagram.png')}}">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="">
                                <img src="{{asset('assets/images/tiktok.png')}}">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="">
                                <img src="{{asset('assets/images/shopee.png')}}">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="info">
                            <h2>đăng kí email</h2>
                            <p>Để nhận những ưu đãi hấp dẫn từ SOLAR</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <form action="">
                                <select class="select" aria-label="Disabled select example">
                                    <option selected>Giới tính</option>
                                    <option value="1">Nam</option>
                                    <option value="2">Nữ</option>
                                    <option value="3">Không xác định</option>
                                </select>
                                <input type="text" name="name" placeholder="Họ và tên">
                                <input type="email" name="email" id="" placeholder="Email">

                                <button class="submit"><i class="fa-solid fa-envelope"></i></button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@pushonce('component-css')
<style>
    
#form_link {
  height: 140px;
  background-color: rgb(249, 184, 70);
}
#form_link .form-newsletter .social {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  margin-top: 15px;
}
#form_link .form-newsletter .social li p {
  margin: 0px;
  padding: 0px;
  padding-right: 15px;
  line-height: 22px;
  padding-top: 4px;
}
#form_link .form-newsletter .social li a {
  display: inline-block;
  width: 40px;
  height: 40px;
  border-radius: 10px;
  text-align: center;
  line-height: 40px;
  margin-right: 30px;
  font-size: 24px;
}
#form_link .form {
  background-color: #fff;
  border-radius: 10px;
  padding: 40px 30px;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
#form_link .form .info h2 {
  font-weight: bold;
  font-size: 22px;
  text-transform: uppercase;
}
#form_link .form .info p {
  margin: 0px;
  padding: 0px;
  line-height: 22px;
}
#form_link .form form {
  display: flex;
}
#form_link .form form input,
#form_link .form form .select,
#form_link .form form button {
  border: none;
  outline: none;
}
#form_link .form form input,
#form_link .form form .select {
  border-radius: 4px;
  -webkit-box-align: center;
  align-items: center;
  display: flex;
  flex: 1 1 0%;
  flex-wrap: wrap;
  padding: 4px 10px;
  position: relative;
  overflow: hidden;
  box-sizing: border-box;
  color: rgb(73, 80, 87);
  border: 1px solid rgb(206, 212, 218);
  transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
}
#form_link .form form input[name=name] {
  border-radius: 0;
}
#form_link .form form .select {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
#form_link .form form input[name=email] {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
#form_link .form form button {
  padding: 6px 10px;
  background-color: rgb(66, 66, 66);
  color: #fff;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
</style>
@endpushonce