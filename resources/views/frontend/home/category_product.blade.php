<section id="product">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="cat-title">
                    <span>Sản phẩm nổi bật</span>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-md-3 col-6">
                        @include('frontend.components.product_item')
                    </div>
                    <div class="col-md-3 col-6">
                        @include('frontend.components.product_item')
                    </div>
                    <div class="col-md-3 col-6">
                        @include('frontend.components.product_item')
                    </div>
                    <div class="col-md-3 col-6">
                        @include('frontend.components.product_item')
                    </div>
                    @include('frontend.components.more')
                </div>
            </div>
        </div>
    </div>

</section>