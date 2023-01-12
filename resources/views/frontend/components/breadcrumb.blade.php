<div class="container">
    <div class="row">
        <div class="col-md-12 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">{{$name}}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@pushonce('component-css')
<style>
    .breadcrumb {
        padding: 10px 0;
    }
    .breadcrumb-item a {
        color: #222222;
        text-decoration: none;
    }
</style>
@endpushonce