<section id="form_link">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="form-newsletter">
                    <ul class="social justify-content-center">
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
        </div>
    </div>
</section>

@pushonce('component-css')
<style>
    
#form_link {
  display: flex;
  align-items: center;
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
@media (min-width: 415px) and (max-width:821px) {
 #form_link .form .info h2 {
    font-size: 20px
}
#form_link .form .info p  {
  font-size: 15px;
}
#form_link .form form {
  flex-direction: column
}
#form_link .form form button {
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0px;
}
}

@media (min-width:319px) and (max-width:415px) {
  #form_link .form-newsletter .social {
    padding-left: 0;margin-bottom:-15px;
    z-index: 1;
    position: sticky;
    width: 100%;
    flex-wrap: wrap;
  }
  #form_link .form {
    padding-bottom: 25px;
    padding-top: 25px;
  }
  #form_link .form form {
    flex-direction: column;
  }
  #form_link .form form .select {
    margin-bottom: 5px;
    border-radius: 4px;
  }
  #form_link .form form input {
    margin-bottom: 5px;
    border-radius: 4px;
  }
  #form_link .form form button{
    border-radius: 4px;
  }
}
</style>
@endpushonce