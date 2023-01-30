
<section id="book">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="book-title">
                    <span>Đặt lịch khám</span>
                </div>
            </div>

            <div class="book-group d-flex justify-content-center">
                <div class="book-form">
                    <div class="book-form-title">
                        <h3>đặt lịch khám</h3>
                    </div>
                    <form action="{{route('appointments')}}" class="book-form-input" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="group">
                            <label for="input-name">Họ và tên  (<span>*</span>)</label>
                            <input type="text" name="name" id="" placeholder="Họ và tên">
                             @error('name')
                                <span class="text-danger mt-1 d-block">{{ $message }}</span>
                              @enderror
                        </div>
                         <div class="group">
                            <label for="input-name">Số điện thoại (<span>*</span>) </label>
                            <input type="text" id="phoneNumber" name="phoneNumber" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value=""  placeholder="Số điện thoại">
                             @error('phoneNumber')
                              <span class="text-danger mt-1 d-block">{{ $message }}</span>
                              @enderror
                        </div>
                         <div class="group">
                            <label for="input-name">Thời gian (<span>*</span>)</label>
                            <input type="datetime-local" name="time" id="" placeholder="Time">
                             @error('time')
                              <span class="text-danger mt-1 d-block">{{ $message }}</span>
                              @enderror
                        </div>
                         <div class="group">
                            <label for="">Triệu chứng</label>
                           <select class="form-select" aria-label="Default select example" name="symptom" value="Các triệu trứng thường">
                                <option value="Nhìn mờ"> Nhìn mờ</option>>
                                <option value="Nhức mỏi mắt">Nhức mỏi mắt</option>>
                                <option value="Đỏ mắt"> Đỏ mắt</option>>
                                <option value="Chảy nước mắt"> Chảy nước mắt</option>>
                                <option value="Bệnh lý về mắt khác"> Bệnh lý về mắt khác</option>
                            </select>
                        </div>
                        <input type="submit" value="đặt lịch khám">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@pushonce('component-css')
<style>
    #book {
  margin-top: 30px;
  background-image: url("../../images/bg-form.jpg");
  padding-bottom: 30px;
  margin-bottom: 30px;
}
#book .book-title {
  height: 28px;
  border-bottom: 2px solid #EBD7A9;
  margin-bottom: 15px;
  position: relative;
}
#book .book-title span {
  position: absolute;
  height: 40px;
  line-height: 40px;
  display: inline-block;
  text-transform: uppercase;
  font-size: 30px;
  top: 0px;
  background: rgb(255, 255, 255);
  padding: 0px 3px 0px 0px;
}
#book .book-group {
  padding-top: 40px;
}
#book .book-group .book-form {
  width: 70%;
  background-color: #fff;
  border-radius: 15px;
  text-align: center;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
#book .book-group .book-form .book-form-title {
  padding-bottom: 20px;
  padding-top: 30px;
}
#book .book-group .book-form .book-form-title h3 {
  color: #EBD7A9;
  font-size: 30px;
  font-weight: 700;
  text-transform: uppercase;
}
#book .book-group .book-form .book-form-input {
  padding: 10px 50px;
}
#book .book-group .book-form .book-form-input .group {
  padding: 10px 0;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
#book .book-group .book-form .book-form-input .group label {
  padding-bottom: 5px;
}
#book .book-group .book-form .book-form-input .group label span {
  color: #ff0000;
}
#book .book-group .book-form .book-form-input .group input{
  width: 100%;
  outline: none;
  padding: 10px 8px;
  font-size: 14px;
  border-radius: 10px;
  border: 1px solid #e0e0e0;
  padding: 12px 10px;
  border-radius: 7px;
  background: #fbfbfb;
}
#book .book-group .book-form .book-form-input .group input[type=datetime-local]::-webkit-datetime-edit {
  color: #b2b0b0;
}
#book .book-group .book-form .book-form-input input[type=submit] {
  display: block;
  margin: 20px auto;
  background-color: #dab357;
  color: #fff;
  padding: 10px 30px;
  border-radius: 24px;
  text-transform: uppercase;
  border: 1px solid #e0e0e0;
}
@media (max-width:821px) and (min-width:415px)  {
    #book .book-group .book-form .book-form-input {
        padding:10px 10px ;
    }
    #book .book-group .book-form {
        width: 100%;
    }
}
@media (min-width:319px) and (max-width: 415px) {
  #book .book-group .book-form .book-form-input {
    padding: 5px;
  }
  #book .book-group .book-form {
    width: 100%;
  }
}
</style>
@endpushonce