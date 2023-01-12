
    <div class="filter">
        <button class="filter-drop"><i class="fa-solid fa-arrow-down-wide-short"></i> BỘ LỌC</button>
        <div id="filter-dropdown" class="filter-content">

            <div class="filter-horizontal">
                <button onclick="horizontal()" class="horizontal-drop"><h2><span>Chiều ngang <img src="{{asset('assets/images/mat-kinh.png')}}" style="width: 18%; padding-bottom: 2%;" alt=""></span> <span><i class="fa-solid fa-plus" id="plus"></i> <i class="fa-solid fa-minus minus" id="minus"></i></span></h2></button>
                <div id="horizontal-dropdown" class="horizontal-content ">
                    <ul>
                        <li>Rộng</li>
                        <li>Vừa</li>
                        <li>Hẹp</li>
                    </ul>
                </div>
            </div>

            <div class="filter-shape">
                <button onclick="shape()" class="shape-drop"><h2><span>Hình dạng</span><span><i class="fa-solid fa-plus" id="plusShape"></i> <i class="fa-solid fa-minus minus" id="minusShape"></i></span></h2></button>
                <div id="shape-dropdown" class="shape-content ">
                    <ul>
                        <li>Mắt mèo</li>
                        <li>Tròn Oval</li>
                        <li>Vuông chữ nhật</li>
                        <li>Vuông Tròn</li>
                        <li>Tròn Tròn</li>
                        <li>Vuông vuông</li>
                        <li>Tròn Cạnh</li>
                        <li>Đặc biệt</li>
                        <li>Đa Giác</li>
                    </ul>
                </div>
            </div>

            <div class="filter-material">
                <button onclick="material()" class="material-drop"><h2><span>Vật liệu</span> <span><i class="fa-solid fa-plus" id="plusMaterial"></i> <i class="fa-solid fa-minus minus" id="minusMaterial"></i></span></h2></button>
                <div id="material-dropdown" class="material-content ">
                    <ul>
                        <li>Nhựa Cứng</li>
                        <li>Kim loại</li>
                        <li>Nhựa Pha Kim Loại</li>
                        <li>Nhựa Dẻo</li>
                        <li>Nhựa Càng Titan</li>
                        <li>Nhựa Ultem</li>
                        <li>Nhựa Acetate</li>
                        <li>Kim loại Titan</li>
                        <li>Kim loại Thép không gỉ</li>
                    </ul>
                </div>
            </div>

            <div class="filter-eyeglass-frame-color"> 
                <button onclick="filterEyeglassFrame()" class="eyeglass-frame-color-drop"><h2><span>Màu gọng kính</span> <span><i class="fa-solid fa-plus" id="plusFrame"></i> <i class="fa-solid fa-minus minus" id="minusFrame"></i></span></h2></button>
                <div id="eyeglass-frame-color-dropdown" class="eyeglass-frame-color-content ">
                    <ul>
                        <li>Màu trung tính</li>
                        <li>Màu tối</li>
                        <li>Màu sáng</li>
                    </ul>
                </div>
            </div>

            <div class="filter-price">
                <button onclick="" class="price-drop"><h2><span>Giá từ</span></h2></button>
                <div id="price-dropdown" class="price-content">
                    <ul>
                        <li>Cao <i class="fa-solid fa-arrow-down-long"></i></li>
                        <li>Thấp <i class="fa-solid fa-arrow-up-long"></i></li>
                    </ul>
                    <input id="price_input" type="range" min="0" max="5000000" step="100000" style="color: rgb(249, 184, 70);"/>
                    <div class="row">
                        <div class="col-xl-6">
                            <input type="number" min="0" max="5000000" value="0" placeholder="Min" autocomplete="off">
                        </div>
                        <div class="col-xl-6">
                            <input type="number" id="maxPrice" min="0" max="5000000" value="2500000" placeholder="Max">
                        </div>
                    </div>
                </div>
            </div>

            <div class="filter-color">
                <button onclick="color()" class="color-drop"><h2><span>Màu sắc</span> <span><i class="fa-solid fa-plus" id="plusColor"></i> <i class="fa-solid fa-minus minus" id="minusColor"></i></span></h2></button>
                <div id="color-dropdown" class="color-content">
                    <ul>
                        <li>Xanh</li>
                        <li>Đỏ</li>
                        <li>Tím</li>
                        <li>Vàng</li>
                    </ul>
                </div>
            </div>
    
            <div class="delete-filter">Xóa bộ lọc</div>
            
          </div>
    </div>




@pushonce('component-css')
<style>
.filter {
    position: relative;
    display: inline-block;
    width: 95%;
}

.filter button{
    text-transform: uppercase;
    border: none;
    background-color: #fff;
}

.filter-drop {
    color: rgb(66, 66, 66);
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.filter-content {
  display: block;
  overflow: auto;
  z-index: 1;
  overflow-x: hidden;
  width: 90%;
}
.horizontal-content, .shape-content, .material-content, 
.eyeglass-frame-color-content, .color-content{
    display: none;
    overflow: auto;
    z-index: 1;
    overflow-x: hidden;
    width: 100%;
}

.filter-content button{
    width: 100%;
    color: black;
    text-decoration: none;
    display: block;
    margin: 20px 0;
    text-align: left;
}
.filter-content h2{
    display: flex;
    justify-content: space-between;
    width: 100%;
    font-size: 14px;
    margin: 0;
}

.show, .showHorizontal, .showShape, .showMaterial, 
.showFilterEyeglassFrame, .showColor {
    display: block;
}

.shape-drop, .material-drop, .eyeglass-frame-color-drop, .color-drop{
    padding-bottom: 3%;
}

.horizontal-content ul,
.shape-content ul,
.material-content ul,
.price-content ul,
.eyeglass-frame-color-content ul{
    padding: 0;
}

.horizontal-content ul li, 
.shape-content ul li, 
.material-content ul li, 
.price-content ul li,
.eyeglass-frame-color-content ul li{
    display: inline-block;
    border: 1px solid rgb(163, 163, 163);
    width: 100%;
    cursor: pointer;
    margin-bottom: 7px;
    padding: 0px 10px;
    height: 40px;
    line-height: 40px;
    position: relative;
}

.horizontal-content ul li:hover, 
.shape-content ul li:hover, 
.material-content ul li:hover, 
.price-content ul li:hover,
.eyeglass-frame-color-content ul li:hover{
    border-color: rgb(249, 184, 70);
    background-color: rgb(249, 184, 70);
}

.price-content input{
    width: 100%;
}

.delete-filter{
    border: 1px solid rgb(40, 40, 40);
    text-align: center;
    padding: 7px 10px;
    cursor: pointer;
}
.delete-filter:hover{
    background-color: rgb(220, 220, 221);
}

.plus{
    display: none;
}
.minus{
    display: none;
}

</style>
@endpushonce



<script>
    function horizontal() {
        document.getElementById("horizontal-dropdown").classList.toggle("showHorizontal");
        document.getElementById("plus").classList.toggle("plus");
        document.getElementById("minus").classList.toggle("minus");

    }
    function shape() {
        document.getElementById("shape-dropdown").classList.toggle("showShape");
        document.getElementById("plusShape").classList.toggle("plus");
        document.getElementById("minusShape").classList.toggle("minus");
    }
    function material() {
        document.getElementById("material-dropdown").classList.toggle("showMaterial");
        document.getElementById("plusMaterial").classList.toggle("plus");
        document.getElementById("minusMaterial").classList.toggle("minus");
    }
    function filterEyeglassFrame() {
        document.getElementById("eyeglass-frame-color-dropdown").classList.toggle("showFilterEyeglassFrame");
        document.getElementById("plusFrame").classList.toggle("plus");
        document.getElementById("minusFrame").classList.toggle("minus");
    }
    function color() {
        document.getElementById("color-dropdown").classList.toggle("showColor");
        document.getElementById("plusColor").classList.toggle("plus");
        document.getElementById("minusColor").classList.toggle("minus");
    }

    const input = document.querySelector("#price_input")
    input.addEventListener("input", (event) => {
        $('#maxPrice').val(event.target.value);
    })
    
</script>