<section id="question">
    <div class="container">
         <div class="row  gx-0">
            <div class="col-md-6 col-sm-6 col-sm-6">
               <div class="question-list">
                    <div class="cat-title">
                        <span>{{ $question->name }}</span>
                    </div>
                    <div class="cat-item">
                        <div class="row gx-3 gy-2">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="wrap position-relative mb-2" style="max-height:190px;">
                                    <a class="cat-img d-block">
                                        <img src="{{ $question->image_1 }}" alt="">
                                    </a>
                                    <div class="cat-info position-absolute">
                                        <h4>{{$question->question_1}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="wrap position-relative mb-2" style="max-height:190px;">
                                    <a class="cat-img d-block">
                                        <img src="{{ $question->image_2 }}" alt="">
                                    </a>
                                    <div class="cat-info position-absolute">
                                        <h4>{{$question->question_2}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="wrap position-relative mb-2" style="max-height:190px;">
                                    <a class="cat-img d-block">
                                        <img src="{{ $question->image_3 }}" alt="">
                                    </a>
                                    <div class="cat-info position-absolute">
                                        <h4>{{$question->question_3}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="wrap position-relative mb-2" style="max-height:190px;">
                                    <a class="cat-img d-block">
                                        <img src="{{ $question->image_4 }}" alt="">
                                    </a>
                                    <div class="cat-info position-absolute">
                                        <h4>{{$question->question_4}}</h4>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
               </div>
            </div>
             <div class="col-md-6 col-sm-6 col-sm-6">
                <div class="question-logo">
                    <img src="{{ $question->image }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>