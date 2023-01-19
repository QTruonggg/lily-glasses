
<div class="filter">
    <div class="filter-title">
        <i class="fa-solid fa-arrow-down-wide-short"></i> BỘ LỌC
    </div>
    <div class="filter-new">
        <a href="{{request()->fullUrlWithQuery(['created_at' => 'desc'])}}">Mới nhất <i class="fa-solid fa-arrow-up-long"></i></a> 
        <a href="{{request()->fullUrlWithQuery(['created_at' => 'asc'])}}">Cũ nhất <i class="fa-solid fa-arrow-down-long"></i></a> 
        <a href="{{request()->fullUrlWithQuery(['price' => 'desc'])}}">Giá từ cao xuống thấp <i class="fa-solid fa-arrow-down-long"></i></a> 
        <a href="{{request()->fullUrlWithQuery(['price' => 'asc'])}}   ">Giá từ thấp tới cao <i class="fa-solid fa-arrow-up-long"></i></a> 
        <a href="{{Request::URL()}}"> Xóa bộ lọc</a>
    </div>
</div>

<div class="filter-mb">
    <div class="filter-title" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <i class="fa-solid fa-arrow-down-wide-short"></i> BỘ LỌC
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">BỘ LỌC</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
           <div class="filter-new">
                <a href="{{request()->fullUrlWithQuery(['created_at' => 'desc'])}}">Mới nhất <i class="fa-solid fa-arrow-up-long"></i></a> 
                <a href="{{request()->fullUrlWithQuery(['created_at' => 'asc'])}}">Cũ nhất <i class="fa-solid fa-arrow-down-long"></i></a> 
                <a href="{{request()->fullUrlWithQuery(['price' => 'desc'])}}">Giá từ cao xuống thấp <i class="fa-solid fa-arrow-down-long"></i></a> 
                <a href="{{request()->fullUrlWithQuery(['price' => 'asc'])}}   ">Giá từ thấp tới cao <i class="fa-solid fa-arrow-up-long"></i></a> 
                <a href="{{Request::URL()}}"> Xóa bộ lọc</a>
            </div>
        </div>
    </div>
</div>


    

@pushonce('component-css')
<style>
    .filter-mb {
        display: none;
    }
.filter {
    display: flex;
    width: 100%;
    padding: 0 0 3%;
}

.filter-title{
    width: 15%;
    font-weight: 500;
}

.filter-new{
    display: flex;
    width: 85%;
}

.filter-new a{
    padding: 0 3%;
    font-weight: 500;
    color:#84757D;
    text-decoration:none;
}

.filter-new a:hover{
    color: #F9B846 ;
}
@media (min-width: 415px) and (max-width:768px) {
    .filter-new {
        width: 100%;
    }
    .filter-new a {
        padding: 10px 0;
        font-size: 16px;
    }
    .filter-title {
        width: 100%;
        font-size: 14px;
        color: #F9B846;
        padding: 0 4px 0 0;
    }
}
@media (max-width:768px) {
    .filter {
        display: none;
    }
    .filter-mb {
        display: block;
        margin-bottom: 10px;
        padding: 10px;
    }
    .filter-new {
        flex-direction: column;
    }
}
</style>
@endpushonce



<script>

</script>