<section id="care " class="mb-2">
    <div class="container">
        <div class="related">
            <h2>Có thể bạn quan tâm</h2>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    @include('frontend.components.product_item')
                </div>
            @endforeach
        </div>
    </div>
</section>