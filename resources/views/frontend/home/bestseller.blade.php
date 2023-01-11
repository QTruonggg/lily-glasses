<section id="best-seller">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <a href="#" class="d-block mb-3">
                    <img src="{{asset('assets/images/best-seller.jpg')}}" alt="Best seller">
                </a>
            </div>
            <div class="col-md-12 col-sm-12 col-12">
               <div class="list-best-seler">
                    <div class="row">
                        @include('frontend.components.product_item')
                        @include('frontend.components.product_item')
                        @include('frontend.components.product_item')
                        @include('frontend.components.product_item')
                    </div>
               </div>
            </div>
        </div>
    </div>

</section>