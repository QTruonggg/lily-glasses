<div class="container">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="row">
                @if ($products->isEmpty())
                <h2 class="d-flex justify-content-center align-items-center mt-5 mb-5" style="color:#777;">Không có sản phẩm bạn cần tìm</h2>
                @else
                @foreach ($products as $product)
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        @include('frontend.components.product_item')
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>