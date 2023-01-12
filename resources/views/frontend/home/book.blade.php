<section id="book">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="book-title">
                    <span>Đặt lịch khám</span>
                </div>
            </div>

            <div class="book-group d-flex">
                <div class="note">
                    <div class="note-header">
                        <h3>Lưu ý</h3>
                        <b>Quý khách vui lòng gửi thông tin chi tiết để chúng tôi có thể sắp xếp cuộc hẹn.</b>
                    </div>
                    <div class="note-content">
                        <ul>
                            <li>
                                <span>Lịch hẹn có hiệu lực sau khi được xác nhận chính thức từ Hệ thống y tế Thu Cúc.</span>
                            </li>
                            <li>
                                <span>Vui lòng cung cấp thông tin chính xác để được phục vụ tốt nhất. Trong trường hợp cung cấp sai thông tin email & điện thoại, việc xác nhận cuộc hẹn sẽ không hiệu lực.</span>
                            </li>
                            <li>
                                <span>Quý khách sử dụng dịch vụ Đặt hẹn trực tuyến, xin vui lòng đặt trước ít nhất là 24 giờ trước khi đến khám.</span>
                            </li>
                            <li>
                                <span>Trong những trường hợp khẩn cấp hoặc nghi ngờ có các triệu chứng nguy hiểm, quý khách nên ĐẾN TRỰC TIẾP hoặc trung tâm y tế gần nhất để kịp thời xử lý.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="book-form">
                    <div class="book-form-title">
                        <h3>đặt lịch khám</h3>
                    </div>
                    <form action="" class="book-form-input" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="group">
                            <label for="input-name">Họ và tên (<span>*</span>)</label>
                            <input type="text" name="name" id="" placeholder="Họ và tên(*)">
                        </div>
                         <div class="group">
                            <label for="input-name">Số điện thoại (<span>*</span>)</label>
                            <input type="number" id="old_price" name="phoneNUmber" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" value=""  placeholder="số điện thoại(*)">
                        </div>
                         <div class="group">
                            <label for="input-name">Thời gian(<span>*</span>)</label>
                            <input type="datetime-local" name="datetime-local" id="" placeholder="Time">
                        </div>
                         <div class="group">
                            <label for="">Triệu chứng</label>
                           <select class="form-select" aria-label="Default select example" name="symptom">
                                <option selected>Các triệu chứng thường gặp : </option>
                                <option value="1"> Nhìn mờ</option>
                                <option value="2"> Nhức mỏi mắt</option>
                                <option value="3"> Đỏ mắt</option>
                                <option value="4"> Chảy nước mắt</option>
                            </select>
                        </div>
                         <div class="group">
                            <label for="input-name">Bệnh lý về mắt khác :</label>
                            <textarea type="text" name="Content" id="" placeholder="Triệu chứng gặp phải..."></textarea>
                        </div>
                        <input type="submit" value="đặt lịch khám">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>