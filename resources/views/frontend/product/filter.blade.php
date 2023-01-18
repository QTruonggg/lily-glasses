
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


    

@pushonce('component-css')
<style>
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

</style>
@endpushonce



<script>

</script>