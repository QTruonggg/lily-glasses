<div class="col-xl-3">
    <div class="filter">
        <button onclick="myFunction()" class="filter-drop"><i class="fa-solid fa-arrow-down-wide-short"></i> BỘ LỌC</button>
        <div id="filter-dropdown" class="filter-content">

            <div class="filter-horizontal">
                <button onclick="horizontal()" class="horizontal-drop"><h2><span>Chiều ngang</span> <span><i class="fa-solid fa-plus"></i> <i class="fa-solid fa-minus"></i></span></h2></button>
                <div id="horizontal-dropdown" class="horizontal-content showHorizontal">
                    <ul>
                        <li>Rộng</li>
                        <li>Vừa</li>
                        <li>Hẹp</li>
                    </ul>
                </div>
            </div>

            <div class="filter-shape">
                <button onclick="shape()" class="shape-drop"><h2><span>Hình dạng</span><span><i class="fa-solid fa-plus"></i> <i class="fa-solid fa-minus"></i></span></h2></button>
                <div id="shape-dropdown" class="shape-content showShape">
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
                <button onclick="material()" class="material-drop"><h2><span>Vật liệu</span> <span><i class="fa-solid fa-plus"></i> <i class="fa-solid fa-minus"></i></span></h2></button>
                <div id="material-dropdown" class="material-content showMaterial">
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
                <button onclick="filterEyeglassFrame()" class="eyeglass-frame-color-drop"><h2><span>Màu gọng kính</span> <span><i class="fa-solid fa-plus"></i> <i class="fa-solid fa-minus"></i></span></h2></button>
                <div id="eyeglass-frame-color-dropdown" class="eyeglass-frame-color-content showFilterEyeglassFrame">
                    <ul>
                        <li>Màu trung tính</li>
                        <li>Màu tối</li>
                        <li>Màu sáng</li>
                    </ul>
                </div>
            </div>

            <div class="filter-price">
                <button onclick="" class="price-drop"><h2><span>Giá từ</span> <span><i class="fa-solid fa-plus"></i> <i class="fa-solid fa-minus"></i></span></h2></button>
                <div id="price-dropdown" class="price-content">
                    <input id="pi_input" type="range" min="0" max="5000000" step="100000"/>
                    <p id="value"></p>
                    <div class="row">
                        <div class="col-xl-6">
                            <input type="number" min="0" max="5000000" value="0" placeholder="Min" autocomplete="off">
                        </div>
                        <div class="col-xl-6">
                            <input type="number" min="0" max="5000000" value="5000000" placeholder="Max">
                        </div>
                    </div>
                </div>
            </div>

            <div class="filter-color">
                <button onclick="color()" class="color-drop"><h2><span>Màu sắc</span> <span><i class="fa-solid fa-plus"></i> <i class="fa-solid fa-minus"></i></span></h2></button>
                <div id="color-dropdown" class="color-content showColor">
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

</div>


@pushonce('component-css')
<style>
.filter {
    position: relative;
    display: inline-block;
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
  display: none;
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

.filter-content span{
    text-align: right;
    right: 0px;
}

.show, .showHorizontal, .showShape, .showMaterial, 
.showFilterEyeglassFrame, .showColor {
    display: block;
}


.horizontal-content ul,
.shape-content ul,
.material-content ul,
.eyeglass-frame-color-content ul{
    padding: 0;
}

.horizontal-content ul li, 
.shape-content ul li, 
.material-content ul li, 
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

.price-content input{
    width: 100%;
}

.delete-filter{
    border: 1px solid rgb(40, 40, 40);
    text-align: center;
    padding: 7px 10px;
    cursor: pointer;
}

</style>
@endpushonce



<script>
    function myFunction() {
        document.getElementById("filter-dropdown").classList.toggle("show");
    }
    function horizontal() {
        document.getElementById("horizontal-dropdown").classList.toggle("showHorizontal");
    }
    function shape() {
        document.getElementById("shape-dropdown").classList.toggle("showShape");
    }
    function material() {
        document.getElementById("material-dropdown").classList.toggle("showMaterial");
    }
    function filterEyeglassFrame() {
        document.getElementById("eyeglass-frame-color-dropdown").classList.toggle("showFilterEyeglassFrame");
    }
    function color() {
        document.getElementById("color-dropdown").classList.toggle("showColor");
    }


    const value = document.querySelector("#value")
    const input = document.querySelector("#pi_input")
    value.textContent = input.value
    input.addEventListener("input", (event) => {
    value.textContent = event.target.value
    })
    
</script>