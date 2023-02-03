
<section id="book">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12" style="padding-bottom: 40px">
                <div class="book-title">
                    <span>Đặt lịch khám</span>
                </div>
            </div>
          
            <div style="display: flex; justify-content: center;">

              @if(session()->has('success'))
              <div class="txt pb-2 pt-2 ps-2 alert alert-success h3">
                {{ session()->get('success') }}
              </div>
            @endif
            </div>


            <div class="book-group d-flex justify-content-center">
                <div class="book-form">
                    <div class="book-form-title">
                        <h3>đặt lịch khám</h3>
                    </div>
            <div class="message pb-2 pt-2 ps-2 alert h5 d-none" style="width: 45%; margin: auto; font-weight: 700; color: #21b300; background-color: #abffa0;"> </div>

                    <div class="book-form-input">
                        <div class="group">
                            <label for="input-name">Họ và tên  (<span>*</span>)</label>
                            <input type="text" name="name" id="name" placeholder="Họ và tên" value="{{old('name')}}">
                             @error('name')
                                <span class="text-danger mt-1 d-block">{{ $message }}</span>
                              @enderror
                              <span class="error_name text-danger mt-1 d-block"></span>
                        </div>
                         <div class="group">
                            <label for="input-name">Số điện thoại (<span>*</span>) </label>
                            <input type="tel" id="phoneNumber" name="phoneNumber" 
                             oninput="this.value = this.value.replace(/[^0-9]/g, '')" 
                             {{-- pattern="[0]{1}[1-9]{1}[0-9]{8}"  maxlength="10" required --}}
                             value="{{old('phoneNumber')}}"  placeholder="Số điện thoại:">
                             @error('phoneNumber')
                              <span class="text-danger mt-1 d-block">{{ $message }}</span>
                              @enderror
                              <span class="error_phone text-danger mt-1 d-block"></span>
                        </div>
                         <div class="group">
                            <label for="input-name">Thời gian (<span>*</span>)</label>
                            <input type="datetime-local" name="time" id="time" placeholder="Time" value="{{old('time')}}">
                             @error('time')
                              <span class="text-danger mt-1 d-block">{{ $message }}</span>
                              @enderror
                              <span class="error_time text-danger mt-1 d-block"></span>
                        </div>
                         <div class="group">
                            <label for="">Triệu chứng</label>
                           <select class="form-select" aria-label="Default select example" id="symptom" name="symptom" value="Các triệu trứng thường">
                                <option value="Nhìn mờ"> Nhìn mờ</option>>
                                <option value="Nhức mỏi mắt">Nhức mỏi mắt</option>>
                                <option value="Đỏ mắt"> Đỏ mắt</option>>
                                <option value="Chảy nước mắt"> Chảy nước mắt</option>>
                                <option value="Bệnh lý về mắt khác"> Bệnh lý về mắt khác</option>
                            </select>
                        </div>
                        
                        <button class="bookAjax ">Đặt lịch khám</button>
                      </div>
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
  color: #C79B3F;
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
#book .book-group .book-form .book-form-input .bookAjax {
  display: block;
  margin: 20px auto;
  background-color: #dab357;
  color: #fff;
  padding: 10px 30px;
  border-radius: 24px;
  text-transform: uppercase;
  border: 1px solid #e0e0e0;
  width: 50%;
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

<script>
  $('.book-group').on('click','.bookAjax', function(e){
    e.preventDefault();
    let _token = $('meta[name="csrf-token"]').attr('content');
    let name = $("#name").val();
    let phoneNumber = $("#phoneNumber").val();
    let time = $("#time").val();
    let symptom = $("#symptom").val();
    $.ajax({
      type:"POST",
      url:`{{route('appointments.ajax')}}`,
      data:{
        _token : _token,
        name : name,
        phoneNumber : phoneNumber,
        time : time,
        symptom : symptom,
      },
      success: function (res) {
        $('.message').text(res.success);
        $('.error_name').text('');
        $('.error_phone').text('');
        $('.error_time').text('');
        $('#name').val('');
        $("#phoneNumber").val('');
        $("#time").val('');

        $('.message').removeClass('d-none');
        setTimeout(()=> {
            $('.message').addClass('d-none')
        },2000)
      },
      error:function(e){
        if(e.responseJSON.errors.name){
          $('.error_name').text(e.responseJSON.errors.name);
        } else {
          $('.error_name').text('');
        }   
        if(e.responseJSON.errors.phoneNumber){
          $('.error_phone').text(e.responseJSON.errors.phoneNumber);
        } else {
          $('.error_phone').text('');
        }
        if(e.responseJSON.errors.time){
          $('.error_time').text(e.responseJSON.errors.time);
        } else{
          $('.error_time').text('');
        }
      }
    })
  });


  
</script>