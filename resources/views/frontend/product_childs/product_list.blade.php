<div class="container">
    <div class="row">
        <div class="col-xl-3 col-md-3 col-lg-3">
            @include('frontend.product.filter')
        </div>
        <div class="col-xl-9 col-md-9 col-lg-9">
            <div class="row">
                @foreach ($product_child->productChilds as $product)
                    <div class="col-xl-4 col-md-4 col-lg-4">
                        @include('frontend.components.product_item')
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12">
            <nav aria-label="Page navigation example ">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>