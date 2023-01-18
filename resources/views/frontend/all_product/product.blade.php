<div class="container">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        @include('frontend.components.product_item')
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>