
    <div class="filter">
        <button class="filter-drop"><i class="fa-solid fa-arrow-down-wide-short"></i> BỘ LỌC</button>
        <div id="filter-dropdown" class="filter-content">

            <div class="filter-price">
                <button onclick="" class="price-drop"><h2><span>Giá từ</span></h2></button>
                <div id="price-dropdown" class="price-content">
                    <ul>
                        <li> <a style="color:#333; text-decoration:none;"  href="{{request()->fullUrlWithQuery(['price' => 'desc'])}}">Giá từ cao xuống thấp</a> <i class="fa-solid fa-arrow-down-long"></i></li>
                        <li><a style="color:#333; text-decoration:none;"  href="{{request()->fullUrlWithQuery(['price' => 'asc'])}}   ">Giá từ thấp tới cao</a> <i class="fa-solid fa-arrow-up-long"></i></li>
                        <li> <a style="color:#333; text-decoration:none;"  href="{{request()->fullUrlWithQuery(['created_at' => 'desc'])}}">Mới nhất</a> <i class="fa-solid fa-arrow-up-long"></i></li>
                        <li> <a style="color:#333; text-decoration:none;"  href="{{request()->fullUrlWithQuery(['Created_at' => 'asc'])}}">Cũ nhất</a> <i class="fa-solid fa-arrow-down-long"></i></li>
                    </ul>
                </div>
            </div>
            <div class="delete-filter"> <a style="color:#333; text-decoration:none;"  href="{{Request::URL()}}"> Xóa bộ lọc</a></div>
         
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